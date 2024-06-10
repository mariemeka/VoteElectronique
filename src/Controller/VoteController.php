<?php
namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Entity\Vote;
use App\Entity\Candidate;

class VoteController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/submitvote', name: 'submitvote', methods: ['POST'])]
    public function submitVote(Request $request): RedirectResponse
    {
        $candidateId = $request->request->get('candidate');
        if (!is_numeric($candidateId)) {
            $this->addFlash('error', 'Invalid candidate ID.');
            return $this->redirectToRoute('vote_page');
        }

        $userId = $this->getUser()->getIdelecteur();
        $electionName = 'élection presidentielle';
        $dateVote = new \DateTime();

        // Verify if the candidate ID is valid
        $candidate = $this->entityManager->getRepository(Candidate::class)->find($candidateId);
        if (!$candidate) {
            $this->addFlash('error', 'Le candidat sélectionné n\'est pas valide.');
            return $this->redirectToRoute('vote_page');
        }

        // Verify if the user has already voted
        $existingVote = $this->entityManager->getRepository(Vote::class)->findOneBy(['voter' => $userId, 'electionName' => $electionName]);
        if ($existingVote) {
            $this->addFlash('info', 'Vous avez déjà voté.');
            return $this->redirectToRoute('vote_confirmation');
        }

        // Create a new vote
        $vote = new Vote();
        $vote->setCandidateId($candidate->getId());
        $vote->setVoter($userId);
        $vote->setElectionName($electionName);
        $vote->setDateVote($dateVote);

        // Save the vote to the database
        $this->entityManager->persist($vote);
        $this->entityManager->flush();

        // Set a session variable to indicate successful vote
        $session = $request->getSession();
        $session->set('hasVoted', true);

        $this->addFlash('success', 'Votre vote a été soumis avec succès.');
        return $this->redirectToRoute('vote_confirmation');
    }

    #[Route('/vote', name: 'vote_page', methods: ['GET'])]
    public function votePage(): Response
    {
        // Fetch candidates from the database
        $candidates = $this->entityManager->getRepository(Candidate::class)->findAll();

        // Render the form view and pass the candidates to the template
        return $this->render('vote/vote_page.html.twig', [
            'candidates' => $candidates,
        ]);
    }

    #[Route('/vote-confirmation', name: 'vote_confirmation', methods: ['GET'])]
    public function voteConfirmation(Request $request): Response
    {
        $userId = $this->getUser()->getIdelecteur();
        $electionName = 'élection presidentielle';

        // Check if the user has already voted
        $existingVote = $this->entityManager->getRepository(Vote::class)->findOneBy(['voter' => $userId, 'electionName' => $electionName]);

        // Check the session variable to see if the user just voted
        $session = $request->getSession();
        $hasJustVoted = $session->get('hasVoted', false);
        $session->remove('hasVoted');

        return $this->render('vote_confirmation.html.twig', [
            'hasVoted' => $existingVote ? true : false,
            'hasJustVoted' => $hasJustVoted,
        ]);
    }

    #[Route('/results', name: 'election_results', methods: ['GET'])]
    public function electionResults(): Response
    {
        $candidates = $this->entityManager->getRepository(Candidate::class)->findAll();
        $voteRepository = $this->entityManager->getRepository(Vote::class);

        $results = [];
        foreach ($candidates as $candidate) {
            $voteCount = $voteRepository->count(['candidateId' => $candidate->getId()]);
            $results[] = [
                'candidate' => $candidate,
                'voteCount' => $voteCount,
            ];
        }

        return $this->render('results.html.twig', [
            'results' => $results,
        ]);
    }
}


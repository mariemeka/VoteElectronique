<?php


namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response; 
use App\Entity\Vote;
use App\Entity\Candidate;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

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
            return $this->redirectToRoute('vote_page'); // Assuming you have a route to show the vote form
        }

        // Verify if the user has already voted
        $existingVote = $this->entityManager->getRepository(Vote::class)->findOneBy(['voter' => $userId]);
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
public function voteConfirmation(): Response
{
    // Your logic to display the vote confirmation page here
    return $this->render('vote_confirmation.html.twig');
}
}


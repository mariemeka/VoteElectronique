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
use App\Entity\User;
use ParagonIE\Sodium\Core\Crypto;

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
        
        $dateVote = new \DateTime();

        
        $candidate = $this->entityManager->getRepository(Candidate::class)->find($candidateId);
        if (!$candidate) {
            $this->addFlash('error', 'Le candidat sélectionné n\'est pas valide.');
            return $this->redirectToRoute('vote_page');
        }

      
        $existingVote = $this->entityManager->getRepository(Vote::class)->findOneBy(['voter' => $userId]);
        if ($existingVote) {
            $this->addFlash('info', 'Vous avez déjà voté.');
            return $this->redirectToRoute('vote_confirmation');
        }

        // Generate a key pair for signing the vote
        $keyPair = sodium_crypto_sign_keypair();
        $publicKey = sodium_crypto_sign_publickey($keyPair);
        $privateKey = sodium_crypto_sign_secretkey($keyPair);

        // Create the message to be signed
        $message = json_encode(['candidateId' => $candidateId, 'userId' => $userId]);

        // Sign the message
        $signature = sodium_crypto_sign_detached($message, $privateKey);

       
        $vote = new Vote();
        $vote->setCandidateId($candidate->getId());
        $vote->setVoter($userId);
        $vote->setDateVote($dateVote);
       
        $vote->setSignature(base64_encode($signature)); // Store the signature as a base64 encoded string
        $vote->setPublicKey(base64_encode($publicKey)); // Store the public key as a base64 encoded string

        // Save the vote to the database
        $this->entityManager->persist($vote);
        $this->entityManager->flush();

       
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
       

        // Check if the user has already voted
        $existingVote = $this->entityManager->getRepository(Vote::class)->findOneBy(['voter' => $userId]);

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

    private function getPublicKeys(): array
    {
        $users = $this->entityManager->getRepository(User::class)->findAll();
        $publicKeys = [];
        foreach ($users as $user) {
            $publicKeys[] = base64_decode($user->getPublicKey());
        }
        return $publicKeys;
    }
}


<?php
// src/Controller/VoteController.php

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

        $user = $this->getUser();
        if (!$user) {
            throw $this->createNotFoundException('User not found.'); // Handle if user is not authenticated
        }

        $userId = $user->getIdelecteur();
        
        // Check if the user has already voted (using session or temporary tracking mechanism)
        $session = $request->getSession();
        if ($session->get('hasVoted_' . $userId, false)) {
            $this->addFlash('info', 'Vous avez déjà voté.');
            return $this->redirectToRoute('vote_confirmation');
        }

        $dateVote = new \DateTime();

        $candidate = $this->entityManager->getRepository(Candidate::class)->find($candidateId);
        if (!$candidate) {
            $this->addFlash('error', 'Le candidat sélectionné n\'est pas valide.');
            return $this->redirectToRoute('vote_page');
        }

        // Create the message to be signed
        $message = json_encode(['candidateId' => $candidateId, 'userId' => $userId]);

        // Sign the message
        $signature = $this->signMessage($message, $user);

        $vote = new Vote();
        $vote->setCandidateId($candidate->getId());
        $vote->setDateVote($dateVote);
        $vote->setSignature($signature);

        // Save the vote to the database
        $this->entityManager->persist($vote);
        $this->entityManager->flush();

        $session->set('hasVoted_' . $userId, true);
	$session->set('hasJustVoted_' . $userId, true);
        $this->addFlash('success', 'Votre vote a été soumis avec succès.');
        return $this->redirectToRoute('vote_confirmation');
    }
    
private function signMessage(string $message, User $user): string
    {
        $privateKey = base64_decode($user->getPrivateKey());

        $signature = sodium_crypto_sign_detached($message, $privateKey);

        return base64_encode($signature);
    }

    #[Route('/vote', name: 'vote_page', methods: ['GET'])]
    public function votePage(): Response
    {
      
        $candidates = $this->entityManager->getRepository(Candidate::class)->findAll();

      
        return $this->render('vote/vote_page.html.twig', [
            'candidates' => $candidates,
        ]);
    }

    #[Route('/vote-confirmation', name: 'vote_confirmation', methods: ['GET'])]
    public function voteConfirmation(Request $request): Response
    {
    $userId = $this->getUser()->getIdelecteur();

        $session = $request->getSession();
        $hasVoted = $session->get('hasVoted_' . $userId, false);
        $hasJustVoted = $session->get('hasJustVoted_' . $userId, false);
        
        // Remove hasJustVoted from session after fetching it
        $session->remove('hasJustVoted_' . $userId);

        return $this->render('vote_confirmation.html.twig', [
            'hasVoted' => $hasVoted,
            'hasJustVoted' => $hasJustVoted, // Add this variable to pass to the template
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

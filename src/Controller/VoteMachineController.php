<?php
// src/Controller/VoteMachineController.php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use App\Entity\Vote;
use App\Entity\Candidate;
use App\Entity\User;

class VoteMachineController extends AbstractController
{
    private $entityManager;
    private $logger;

    public function __construct(EntityManagerInterface $entityManager, LoggerInterface $logger)
    {
        $this->entityManager = $entityManager;
        $this->logger = $logger;
    }

    #[Route('/machine/vote', name: 'machine_vote', methods: ['GET'])]
    public function votePage(): Response
    {
        $candidates = $this->entityManager->getRepository(Candidate::class)->findAll();

        return $this->render('vote/vote_page.html.twig', [
            'candidates' => $candidates,
        ]);
    }

    #[Route('/confirm', name: 'machine_confirm', methods: ['POST'])]
public function confirmVote(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $candidateId = $request->request->get('candidate');
            $this->logger->info('Candidate ID received: ' . $candidateId);

            // Fetch candidate from database
            $candidate = $this->entityManager->getRepository(Candidate::class)->find($candidateId);

            if (!$candidate) {
                $this->addFlash('error', 'Candidate not found with ID: ' . $candidateId);
                return $this->redirectToRoute('machine_vote');
            }

            // Rest of your logic...

            return $this->render('vote/confirm_page.html.twig', [
                'candidate' => $candidate,
            ]);
        }

        // Handle GET request if needed
        return $this->redirectToRoute('machine_vote');
    }





    #[Route('/submitvotes', name: 'machine_submitvote', methods: ['POST'])]
    public function submitVotes(Request $request): RedirectResponse
    {
        $idelecteur = $request->request->get('idelecteur');

        // Vérifier si l'utilisateur existe dans la base de données
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['idelecteur' => $idelecteur]);
        if (!$user) {
            $this->addFlash('error', 'Identifiant d\'électeur invalide.');
            return $this->redirectToRoute('machine_vote');
        }

        // Vérifier si l'utilisateur a déjà voté
        $hasVoted = $this->entityManager->getRepository(Vote::class)->findOneBy(['user' => $user]);
        if ($hasVoted) {
            $this->addFlash('error', 'Vous avez déjà voté.');
            return $this->redirectToRoute('machine_vote');
        }

        // Si l'utilisateur existe et n'a pas encore voté, continuer le processus de vote...

        $dateVote = new \DateTime();
        $candidateId = $request->request->get('candidate');
        $candidate = $this->entityManager->getRepository(Candidate::class)->find($candidateId);
        if (!$candidate) {
            $this->addFlash('error', 'Le candidat sélectionné n\'est pas valide.');
            return $this->redirectToRoute('machine_vote');
        }

        // Créer l'entité Vote
        $vote = new Vote();
        $vote->setCandidate($candidate);
        $vote->setUser($user); // Associer l'utilisateur au vote
        $vote->setDateVote($dateVote);

        // Enregistrer le vote en base de données
        $this->entityManager->persist($vote);
        $this->entityManager->flush();

        $this->addFlash('success', 'Votre vote a été soumis avec succès.');
        return $this->redirectToRoute('machine_vote');
    }

    #[Route('/machine/results', name: 'machine_results', methods: ['GET'])]
    public function results(): Response
    {
        $candidates = $this->entityManager->getRepository(Candidate::class)->findAll();
        $voteRepository = $this->entityManager->getRepository(Vote::class);

        $results = [];
        foreach ($candidates as $candidate) {
            $voteCount = $voteRepository->count(['candidate' => $candidate]);
            $results[] = [
                'candidate' => $candidate,
                'voteCount' => $voteCount,
            ];
        }

        return $this->render('vote/machine_results.html.twig', [
            'results' => $results,
        ]);
    }
}

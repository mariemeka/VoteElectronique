<?php
// src/Controller/VoteController.php

namespace App\Controller;

use App\Entity\Vote;
use App\Entity\Candidate;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Driver;
use Doctrine\ORM\Mapping\AnnotationDriver;
class VoteController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/submit_vote', name: 'submit_vote', methods: ['POST'])]
    public function submitVoteAction(Request $request): Response
    {
        $candidateId = $request->request->get('candidate');
        $user = $this->getUser();

        // Valider que l'utilisateur n'a pas déjà voté
        if ($user->hasVoted()) {
            return new Response('Vous avez déjà voté', Response::HTTP_FORBIDDEN);
        }

        // Enregistrer le vote
        $candidate = $this->entityManager->getRepository(Candidate::class)->find($candidateId);
        if (!$candidate) {
            throw $this->createNotFoundException('Candidate not found');
        }

        $vote = new Vote();
        $vote->setUser($user);
        $vote.setCandidate($candidate);
        $vote->setDateVote(new \DateTime());

        $this->entityManager->persist($vote);

        // Marquer l'utilisateur comme ayant voté
        $user->setHasVoted(true);
        $this->entityManager->flush();

        return new Response('Votre vote a été enregistré', Response::HTTP_OK);
    }
}


<?php
// src/Controller/CandidateController.php

namespace App\Controller;

use App\Entity\Candidate;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\Mapping\Driver;
use Doctrine\ORM\Mapping\AnnotationDriver;

class CandidateController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/candidate/{id}', name: 'candidate_page')]
    public function show(int $id): Response
    {
        $candidate = $this->entityManager->getRepository(Candidate::class)->find($id);

        if (!$candidate) {
            throw $this->createNotFoundException('Candidate not found');
        }

        return $this->render('candidate/show.html.twig', [
            'candidate' => $candidate,
        ]);
    }
}


<?php
// src/Controller/SecurityController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface; 
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Doctrine\ORM\Mapping\Driver;

use Doctrine\ORM\Mapping\AnnotationDriver;


class SecurityController extends AbstractController
{
    #[Route('/welcome', name: 'welcome', methods: ['GET'])]
    public function welcome(LoggerInterface $logger, UrlGeneratorInterface $urlGenerator): Response
    {
        $user = $this->getUser();

        if (!$user) {
            $logger->error('Utilisateur non trouvé');
            throw $this->createNotFoundException('User not found');
        }

        $logger->info('Utilisateur trouvé: ' . $user->getUsername());

        // Générer les liens vers les pages des candidats
        $candidateLinks = [];
        for ($i = 1; $i <= 5; $i++) {
            $candidateLinks[] = $urlGenerator->generate('candidate_page', ['id' => $i]);
        }

        return $this->render('security/welcome.html.twig', [
            'user' => $user,
            'candidate_links' => $candidateLinks
        ]);
    }
}


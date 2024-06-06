<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Driver;
use Doctrine\ORM\Mapping\AnnotationDriver;

class UserController extends AbstractController
{
    #[Route('/user{idelecteur}', name: 'app_user')]

public function show(EntityManagerInterface $entityManager, int $idelecteur): Response
    {
        $user = $entityManager->getRepository(User::class)->find($idelecteur);

        if (!$user) {
            throw $this->createNotFoundException(
                'No product found for id '.$idelecteur
            );
        }

        return new Response('Check out this great product: '.$user->getName());

       
    }
}

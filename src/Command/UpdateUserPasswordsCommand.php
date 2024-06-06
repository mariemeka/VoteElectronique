<?php
// src/Command/UpdateUserPasswordsCommand.php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

class UpdateUserPasswordsCommand extends Command
{
    protected static $defaultName = 'app:update-user-passwords';

    private $passwordHasher;
    private $entityManager;

    public function __construct(UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager)
    {
        $this->passwordHasher = $passwordHasher;
        $this->entityManager = $entityManager;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setDescription('Update passwords for all users in the database');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $users = $this->entityManager->getRepository(User::class)->findAll();

        foreach ($users as $user) {
            $plaintextPassword = $user->getPassword(); // You might need to modify this depending on your User entity structure
            $hashedPassword = $this->passwordHasher->hashPassword($user, $plaintextPassword);
            $user->setPassword($hashedPassword);
        }

        $this->entityManager->flush();

        $output->writeln('Passwords updated successfully for all users.');

        return Command::SUCCESS;
    }
}

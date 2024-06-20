<?php
// src/Command/UpdateUserKeysCommand.php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use ParagonIE\Sodium\Core\Crypto;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class UpdateUserKeysCommand extends Command
{
    protected static $defaultName = 'app:update-user-keys';
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function configure()
    {
        $this->setDescription('Update users with generated private and public keys');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $userRepository = $this->entityManager->getRepository(User::class);
        $users = $userRepository->findAll();

        foreach ($users as $user) {
            // Generate a key pair for signing
            $keyPair = sodium_crypto_sign_keypair();
            $publicKey = sodium_crypto_sign_publickey($keyPair);
            $privateKey = sodium_crypto_sign_secretkey($keyPair);

            // Encode keys
            $user->setPrivateKey(base64_encode($privateKey));
            $user->setPublicKey(base64_encode($publicKey));

            $this->entityManager->persist($user);
        }

        $this->entityManager->flush();

        $io->success('Keys updated for all users.');

        return Command::SUCCESS;
    }
}


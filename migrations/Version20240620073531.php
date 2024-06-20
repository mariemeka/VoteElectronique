<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240620073531 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add private_key and public_key columns to User table';
    }

    public function up(Schema $schema): void
    {
         $this->addSql('ALTER TABLE users ADD private_key TEXT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
         $this->addSql('ALTER TABLE users DROP private_key');
    }
}

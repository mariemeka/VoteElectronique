<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240610082111 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add encrypted_vote and signature columns to the vote table';
    }

    public function up(Schema $schema): void
    {
        // Add columns without NOT NULL constraints first
        $this->addSql('ALTER TABLE vote ADD encrypted_vote TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE vote ADD signature TEXT DEFAULT NULL');

        // Set default values for existing rows
        $this->addSql("UPDATE vote SET encrypted_vote = '' WHERE encrypted_vote IS NULL");
        $this->addSql("UPDATE vote SET signature = '' WHERE signature IS NULL");

        // Alter columns to NOT NULL
        $this->addSql('ALTER TABLE vote ALTER COLUMN encrypted_vote SET NOT NULL');
        $this->addSql('ALTER TABLE vote ALTER COLUMN signature SET NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // Remove the columns
        $this->addSql('ALTER TABLE vote DROP encrypted_vote');
        $this->addSql('ALTER TABLE vote DROP signature');
    }
}


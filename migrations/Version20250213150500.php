<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250213150500 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Clean up duplicate usernames';
    }

    public function up(Schema $schema): void
    {
        // First, update empty usernames to a unique value
        $this->addSql('UPDATE kulmapeck_user SET username = CONCAT("user_", id) WHERE username = "" OR username IS NULL');
        
        // Then remove the unique constraint if it exists
        $this->addSql('ALTER TABLE kulmapeck_user DROP INDEX IF EXISTS UNIQ_9BE902C8F85E0677');
        
        // Add the unique constraint back
        $this->addSql('ALTER TABLE kulmapeck_user ADD UNIQUE INDEX UNIQ_9BE902C8F85E0677 (username)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE kulmapeck_user DROP INDEX IF EXISTS UNIQ_9BE902C8F85E0677');
    }
}

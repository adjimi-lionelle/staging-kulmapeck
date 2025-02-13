<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250213124918 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add chat token to user table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE kulmapeck_user ADD t0_chat_token VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE kulmapeck_user DROP t0_chat_token');
    }
}

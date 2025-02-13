<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250213170100 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Mark table-conflicting migrations as executed';
    }

    public function up(Schema $schema): void
    {
        // Mark migrations that deal with existing tables as executed
        $this->addSql('INSERT IGNORE INTO doctrine_migration_versions (version, executed_at) 
            VALUES 
            ("DoctrineMigrations\\\\Version20230514082015", NOW()),
            ("DoctrineMigrations\\\\Version20230514082016", NOW()),
            ("DoctrineMigrations\\\\Version20230514082017", NOW()),
            ("DoctrineMigrations\\\\Version20230514082018", NOW()),
            ("DoctrineMigrations\\\\Version20230514082019", NOW()),
            ("DoctrineMigrations\\\\Version20230514082020", NOW())
        ');

        // Add any missing foreign keys if they don\'t exist
        $this->addSql('ALTER TABLE user_filiere ADD CONSTRAINT IF NOT EXISTS FK_89147FA0A76ED395 FOREIGN KEY (user_id) REFERENCES kulmapeck_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_filiere ADD CONSTRAINT IF NOT EXISTS FK_89147FA0180AA129 FOREIGN KEY (filiere_id) REFERENCES filiere (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM doctrine_migration_versions 
            WHERE version IN (
                "DoctrineMigrations\\\\Version20230514082015",
                "DoctrineMigrations\\\\Version20230514082016",
                "DoctrineMigrations\\\\Version20230514082017",
                "DoctrineMigrations\\\\Version20230514082018",
                "DoctrineMigrations\\\\Version20230514082019",
                "DoctrineMigrations\\\\Version20230514082020"
            )'
        );
    }
}

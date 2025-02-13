<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250213170200 extends AbstractMigration
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

        // Try to add foreign keys - these will fail silently if they already exist
        $this->addSql('
            SET @constraint_exists = (
                SELECT COUNT(*)
                FROM information_schema.TABLE_CONSTRAINTS 
                WHERE CONSTRAINT_SCHEMA = DATABASE()
                AND CONSTRAINT_NAME = "FK_89147FA0A76ED395"
            );
            SET @sql = IF(@constraint_exists = 0,
                "ALTER TABLE user_filiere ADD CONSTRAINT FK_89147FA0A76ED395 FOREIGN KEY (user_id) REFERENCES kulmapeck_user (id) ON DELETE CASCADE",
                "SELECT 1"
            );
            PREPARE stmt FROM @sql;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');

        $this->addSql('
            SET @constraint_exists = (
                SELECT COUNT(*)
                FROM information_schema.TABLE_CONSTRAINTS 
                WHERE CONSTRAINT_SCHEMA = DATABASE()
                AND CONSTRAINT_NAME = "FK_89147FA0180AA129"
            );
            SET @sql = IF(@constraint_exists = 0,
                "ALTER TABLE user_filiere ADD CONSTRAINT FK_89147FA0180AA129 FOREIGN KEY (filiere_id) REFERENCES filiere (id) ON DELETE CASCADE",
                "SELECT 1"
            );
            PREPARE stmt FROM @sql;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');
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

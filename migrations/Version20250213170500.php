<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250213170500 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Mark remaining column-conflicting migrations as executed';
    }

    public function up(Schema $schema): void
    {
        // Mark migrations that deal with existing columns as executed
        $this->addSql('INSERT IGNORE INTO doctrine_migration_versions (version, executed_at) 
            VALUES 
            ("DoctrineMigrations\\\\Version20230527133033", NOW()),
            ("DoctrineMigrations\\\\Version20230527133034", NOW()),
            ("DoctrineMigrations\\\\Version20230527133035", NOW()),
            ("DoctrineMigrations\\\\Version20230527133036", NOW()),
            ("DoctrineMigrations\\\\Version20230527133037", NOW()),
            ("DoctrineMigrations\\\\Version20230527133038", NOW()),
            ("DoctrineMigrations\\\\Version20230527133039", NOW()),
            ("DoctrineMigrations\\\\Version20230527133040", NOW()),
            ("DoctrineMigrations\\\\Version20230527133041", NOW()),
            ("DoctrineMigrations\\\\Version20230527133042", NOW()),
            ("DoctrineMigrations\\\\Version20230527133043", NOW()),
            ("DoctrineMigrations\\\\Version20230527133044", NOW()),
            ("DoctrineMigrations\\\\Version20230527133045", NOW()),
            ("DoctrineMigrations\\\\Version20230527133046", NOW()),
            ("DoctrineMigrations\\\\Version20230527133047", NOW()),
            ("DoctrineMigrations\\\\Version20230527133048", NOW()),
            ("DoctrineMigrations\\\\Version20230527133049", NOW()),
            ("DoctrineMigrations\\\\Version20230527133050", NOW()),
            ("DoctrineMigrations\\\\Version20230527133051", NOW()),
            ("DoctrineMigrations\\\\Version20230527133052", NOW())
        ');

        // Add any missing indexes that might be needed
        $this->addSql('
            SET @index_exists = (
                SELECT COUNT(*)
                FROM information_schema.STATISTICS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "evaluation"
                AND INDEX_NAME = "is_passed_idx"
            );
            SET @sql = IF(@index_exists = 0,
                "CREATE INDEX is_passed_idx ON evaluation (is_passed)",
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
                "DoctrineMigrations\\\\Version20230527133033",
                "DoctrineMigrations\\\\Version20230527133034",
                "DoctrineMigrations\\\\Version20230527133035",
                "DoctrineMigrations\\\\Version20230527133036",
                "DoctrineMigrations\\\\Version20230527133037",
                "DoctrineMigrations\\\\Version20230527133038",
                "DoctrineMigrations\\\\Version20230527133039",
                "DoctrineMigrations\\\\Version20230527133040",
                "DoctrineMigrations\\\\Version20230527133041",
                "DoctrineMigrations\\\\Version20230527133042",
                "DoctrineMigrations\\\\Version20230527133043",
                "DoctrineMigrations\\\\Version20230527133044",
                "DoctrineMigrations\\\\Version20230527133045",
                "DoctrineMigrations\\\\Version20230527133046",
                "DoctrineMigrations\\\\Version20230527133047",
                "DoctrineMigrations\\\\Version20230527133048",
                "DoctrineMigrations\\\\Version20230527133049",
                "DoctrineMigrations\\\\Version20230527133050",
                "DoctrineMigrations\\\\Version20230527133051",
                "DoctrineMigrations\\\\Version20230527133052"
            )'
        );
    }
}

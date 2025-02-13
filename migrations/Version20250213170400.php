<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250213170400 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Mark column-conflicting migrations as executed';
    }

    public function up(Schema $schema): void
    {
        // Mark migrations that deal with existing columns as executed
        $this->addSql('INSERT IGNORE INTO doctrine_migration_versions (version, executed_at) 
            VALUES 
            ("DoctrineMigrations\\\\Version20230523091822", NOW()),
            ("DoctrineMigrations\\\\Version20230523091823", NOW()),
            ("DoctrineMigrations\\\\Version20230523091824", NOW()),
            ("DoctrineMigrations\\\\Version20230523091825", NOW()),
            ("DoctrineMigrations\\\\Version20230523091826", NOW()),
            ("DoctrineMigrations\\\\Version20230523091827", NOW()),
            ("DoctrineMigrations\\\\Version20230523091828", NOW()),
            ("DoctrineMigrations\\\\Version20230523091829", NOW()),
            ("DoctrineMigrations\\\\Version20230523091830", NOW()),
            ("DoctrineMigrations\\\\Version20230523091831", NOW()),
            ("DoctrineMigrations\\\\Version20230523091832", NOW()),
            ("DoctrineMigrations\\\\Version20230523091833", NOW()),
            ("DoctrineMigrations\\\\Version20230523091834", NOW()),
            ("DoctrineMigrations\\\\Version20230523091835", NOW()),
            ("DoctrineMigrations\\\\Version20230523091836", NOW()),
            ("DoctrineMigrations\\\\Version20230523091837", NOW()),
            ("DoctrineMigrations\\\\Version20230523091838", NOW()),
            ("DoctrineMigrations\\\\Version20230523091839", NOW()),
            ("DoctrineMigrations\\\\Version20230523091840", NOW()),
            ("DoctrineMigrations\\\\Version20230523091841", NOW())
        ');

        // Add any missing indexes that might be needed
        $this->addSql('
            SET @index_exists = (
                SELECT COUNT(*)
                FROM information_schema.STATISTICS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "evaluation"
                AND INDEX_NAME = "slug_idx"
            );
            SET @sql = IF(@index_exists = 0,
                "CREATE INDEX slug_idx ON evaluation (slug)",
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
                "DoctrineMigrations\\\\Version20230523091822",
                "DoctrineMigrations\\\\Version20230523091823",
                "DoctrineMigrations\\\\Version20230523091824",
                "DoctrineMigrations\\\\Version20230523091825",
                "DoctrineMigrations\\\\Version20230523091826",
                "DoctrineMigrations\\\\Version20230523091827",
                "DoctrineMigrations\\\\Version20230523091828",
                "DoctrineMigrations\\\\Version20230523091829",
                "DoctrineMigrations\\\\Version20230523091830",
                "DoctrineMigrations\\\\Version20230523091831",
                "DoctrineMigrations\\\\Version20230523091832",
                "DoctrineMigrations\\\\Version20230523091833",
                "DoctrineMigrations\\\\Version20230523091834",
                "DoctrineMigrations\\\\Version20230523091835",
                "DoctrineMigrations\\\\Version20230523091836",
                "DoctrineMigrations\\\\Version20230523091837",
                "DoctrineMigrations\\\\Version20230523091838",
                "DoctrineMigrations\\\\Version20230523091839",
                "DoctrineMigrations\\\\Version20230523091840",
                "DoctrineMigrations\\\\Version20230523091841"
            )'
        );
    }
}

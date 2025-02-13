<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250213170300 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Mark remaining table-conflicting migrations as executed';
    }

    public function up(Schema $schema): void
    {
        // Mark migrations that deal with existing tables as executed
        $this->addSql('INSERT IGNORE INTO doctrine_migration_versions (version, executed_at) 
            VALUES 
            ("DoctrineMigrations\\\\Version20230523075158", NOW()),
            ("DoctrineMigrations\\\\Version20230523075159", NOW()),
            ("DoctrineMigrations\\\\Version20230523075160", NOW()),
            ("DoctrineMigrations\\\\Version20230523075161", NOW()),
            ("DoctrineMigrations\\\\Version20230523075162", NOW()),
            ("DoctrineMigrations\\\\Version20230523075163", NOW()),
            ("DoctrineMigrations\\\\Version20230523075164", NOW()),
            ("DoctrineMigrations\\\\Version20230523075165", NOW()),
            ("DoctrineMigrations\\\\Version20230523075166", NOW()),
            ("DoctrineMigrations\\\\Version20230523075167", NOW())
        ');

        // Add any missing indexes to evaluation table if they don\'t exist
        $this->addSql('
            SET @index_exists = (
                SELECT COUNT(*)
                FROM information_schema.STATISTICS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "evaluation"
                AND INDEX_NAME = "IDX_1323A575A6CC7B2"
            );
            SET @sql = IF(@index_exists = 0,
                "CREATE INDEX IDX_1323A575A6CC7B2 ON evaluation (eleve_id)",
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
                "DoctrineMigrations\\\\Version20230523075158",
                "DoctrineMigrations\\\\Version20230523075159",
                "DoctrineMigrations\\\\Version20230523075160",
                "DoctrineMigrations\\\\Version20230523075161",
                "DoctrineMigrations\\\\Version20230523075162",
                "DoctrineMigrations\\\\Version20230523075163",
                "DoctrineMigrations\\\\Version20230523075164",
                "DoctrineMigrations\\\\Version20230523075165",
                "DoctrineMigrations\\\\Version20230523075166",
                "DoctrineMigrations\\\\Version20230523075167"
            )'
        );
    }
}

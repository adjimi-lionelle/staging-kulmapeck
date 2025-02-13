<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250213165300 extends AbstractMigration
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
            ("DoctrineMigrations\\\\Version20230513111318", NOW()),
            ("DoctrineMigrations\\\\Version20230513064906", NOW()),
            ("DoctrineMigrations\\\\Version20250107113453", NOW()),
            ("DoctrineMigrations\\\\Version20230513111318", NOW())
        ');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DELETE FROM doctrine_migration_versions 
            WHERE version IN (
                "DoctrineMigrations\\\\Version20230513111318",
                "DoctrineMigrations\\\\Version20230513064906",
                "DoctrineMigrations\\\\Version20250107113453",
                "DoctrineMigrations\\\\Version20230513111318"
            )'
        );
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250108232446 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE kulmapeck_user ADD username VARCHAR(180) NOT NULL, ADD phone_number VARCHAR(180) NOT NULL, CHANGE email email VARCHAR(180) DEFAULT NULL, CHANGE roles roles JSON NOT NULL');
        
    }

    public function down(Schema $schema): void
    {
        
        $this->addSql('DROP INDEX UNIQ_9BE902C8F85E0677 ON `kulmapeck_user`');
        $this->addSql('DROP INDEX UNIQ_9BE902C86B01BC5B ON `kulmapeck_user`');
        $this->addSql('ALTER TABLE `kulmapeck_user` DROP username, DROP phone_number, CHANGE email email VARCHAR(180) NOT NULL, CHANGE roles roles JSON NOT NULL COLLATE `utf8mb4_bin`');
        
    }
}

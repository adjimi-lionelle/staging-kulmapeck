<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240416185649 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE investisseur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, create_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', is_enabled TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE part_action (id INT AUTO_INCREMENT NOT NULL, investisseur_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, relation VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_7E5C4C07A8F9CCCA (investisseur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, relation_id INT DEFAULT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D6493256915B (relation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE part_action ADD CONSTRAINT FK_7E5C4C07A8F9CCCA FOREIGN KEY (investisseur_id) REFERENCES investisseur (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6493256915B FOREIGN KEY (relation_id) REFERENCES investisseur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE part_action DROP FOREIGN KEY FK_7E5C4C07A8F9CCCA');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493256915B');
        $this->addSql('DROP TABLE investisseur');
        $this->addSql('DROP TABLE part_action');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

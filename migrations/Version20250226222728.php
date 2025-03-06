<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250226222728 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
       // $this->addSql('CREATE TABLE chat_message (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, subject_id INT NOT NULL, content LONGTEXT NOT NULL, is_from_ai TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', is_read TINYINT(1) NOT NULL, INDEX IDX_FAB3FC16CB944F1A (student_id), INDEX IDX_FAB3FC1623EDC87 (subject_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       /*$this->addSql('CREATE TABLE matiere_cycle (id INT AUTO_INCREMENT NOT NULL, matiere_id INT NOT NULL, cycle INT NOT NULL, INDEX IDX_3C267FE6F46CD258 (matiere_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       $this->addSql('CREATE TABLE message_chat (id INT AUTO_INCREMENT NOT NULL, subject_chat_id INT NOT NULL, sender_id INT NOT NULL, content VARCHAR(255) NOT NULL, is_from_ai TINYINT(1) NOT NULL, is_read TINYINT(1) NOT NULL, create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_CC086973BF18DD87 (subject_chat_id), INDEX IDX_CC086973F624B39D (sender_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       $this->addSql('CREATE TABLE subject_chat (id INT AUTO_INCREMENT NOT NULL, matiere_id INT NOT NULL, cycle INT NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(20) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_F7577671F46CD258 (matiere_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       $this->addSql('CREATE TABLE web_socket_connection (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, subject_chat_id INT DEFAULT NULL, is_typing TINYINT(1) NOT NULL, last_activity DATETIME NOT NULL, INDEX IDX_7C4108E9A76ED395 (user_id), INDEX IDX_7C4108E9BF18DD87 (subject_chat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
     
       /*$this->addSql('ALTER TABLE chat_message ADD CONSTRAINT FK_FAB3FC16CB944F1A FOREIGN KEY (student_id) REFERENCES eleve (id)');
       $this->addSql('ALTER TABLE chat_message ADD CONSTRAINT FK_FAB3FC1623EDC87 FOREIGN KEY (subject_id) REFERENCES categorie (id)');*/

      /* $this->addSql('ALTER TABLE matiere_cycle ADD CONSTRAINT FK_3C267FE6F46CD258 FOREIGN KEY (matiere_id) REFERENCES categorie (id)');
       $this->addSql('ALTER TABLE message_chat ADD CONSTRAINT FK_CC086973BF18DD87 FOREIGN KEY (subject_chat_id) REFERENCES subject_chat (id)');
       $this->addSql('ALTER TABLE message_chat ADD CONSTRAINT FK_CC086973F624B39D FOREIGN KEY (sender_id) REFERENCES kulmapeck_user (id)');
       $this->addSql('ALTER TABLE subject_chat ADD CONSTRAINT FK_F7577671F46CD258 FOREIGN KEY (matiere_id) REFERENCES categorie (id)');
       $this->addSql('ALTER TABLE web_socket_connection ADD CONSTRAINT FK_7C4108E9A76ED395 FOREIGN KEY (user_id) REFERENCES kulmapeck_user (id)');
       $this->addSql('ALTER TABLE web_socket_connection ADD CONSTRAINT FK_7C4108E9BF18DD87 FOREIGN KEY (subject_chat_id) REFERENCES subject_chat (id)');*/

      // $this->addSql('DROP TABLE refresh_token');

      /* $this->addSql('CREATE INDEX idx_categorie_name ON categorie (name)');
       $this->addSql('DROP INDEX UNIQ_9BE902C8E7927C74 ON kulmapeck_user');*/

      /* $this->addSql('CREATE UNIQUE INDEX UNIQ_9BE902C8F85E0677 ON kulmapeck_user (username)');
       $this->addSql('CREATE UNIQUE INDEX UNIQ_9BE902C86B01BC5B ON kulmapeck_user (phone_number)');
       $this->addSql('ALTER TABLE personne CHANGE born_at born_at DATE DEFAULT NULL, CHANGE sexe sexe VARCHAR(100) DEFAULT NULL');
       $this->addSql('ALTER TABLE quiz CHANGE proposition_juste proposition_juste JSON NOT NULL');
       $this->addSql('ALTER TABLE quiz_result CHANGE result result JSON DEFAULT NULL');*/
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
       /* $this->addSql('CREATE TABLE refresh_token (id INT AUTO_INCREMENT NOT NULL, refresh_token VARCHAR(128) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, username VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, valid DATETIME NOT NULL, UNIQUE INDEX UNIQ_C74F2195C74F2195 (refresh_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE chat_message DROP FOREIGN KEY FK_FAB3FC16CB944F1A');
        $this->addSql('ALTER TABLE chat_message DROP FOREIGN KEY FK_FAB3FC1623EDC87');*/

        $this->addSql('ALTER TABLE matiere_cycle DROP FOREIGN KEY FK_3C267FE6F46CD258');
        $this->addSql('ALTER TABLE message_chat DROP FOREIGN KEY FK_CC086973BF18DD87');
        $this->addSql('ALTER TABLE message_chat DROP FOREIGN KEY FK_CC086973F624B39D');
        $this->addSql('ALTER TABLE subject_chat DROP FOREIGN KEY FK_F7577671F46CD258');
        $this->addSql('ALTER TABLE web_socket_connection DROP FOREIGN KEY FK_7C4108E9A76ED395');
        $this->addSql('ALTER TABLE web_socket_connection DROP FOREIGN KEY FK_7C4108E9BF18DD87');
       // $this->addSql('DROP TABLE chat_message');
        $this->addSql('DROP TABLE matiere_cycle');
        $this->addSql('DROP TABLE message_chat');
        $this->addSql('DROP TABLE subject_chat');
        $this->addSql('DROP TABLE web_socket_connection');/*
        $this->addSql('DROP INDEX idx_categorie_name ON categorie');
        $this->addSql('DROP INDEX UNIQ_9BE902C8F85E0677 ON kulmapeck_user');
        $this->addSql('DROP INDEX UNIQ_9BE902C86B01BC5B ON kulmapeck_user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9BE902C8E7927C74 ON kulmapeck_user (email)');
        $this->addSql('ALTER TABLE personne CHANGE born_at born_at DATE NOT NULL, CHANGE sexe sexe VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE quiz CHANGE proposition_juste proposition_juste JSON NOT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE quiz_result CHANGE result result JSON DEFAULT NULL COLLATE `utf8mb4_bin`');*/
    }
}

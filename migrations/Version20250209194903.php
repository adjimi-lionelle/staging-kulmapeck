<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250209194903 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE web_socket_connection (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, group_chat_id INT NOT NULL, is_typing TINYINT(1) NOT NULL, last_activity DATETIME NOT NULL, INDEX IDX_7C4108E9A76ED395 (user_id), INDEX IDX_7C4108E99C9A2529 (group_chat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE web_socket_connection ADD CONSTRAINT FK_7C4108E9A76ED395 FOREIGN KEY (user_id) REFERENCES `kulmapeck_user` (id)');
        $this->addSql('ALTER TABLE web_socket_connection ADD CONSTRAINT FK_7C4108E99C9A2529 FOREIGN KEY (group_chat_id) REFERENCES group_chat (id)');
        
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE web_socket_connection DROP FOREIGN KEY FK_7C4108E9A76ED395');
        $this->addSql('ALTER TABLE web_socket_connection DROP FOREIGN KEY FK_7C4108E99C9A2529');
        $this->addSql('DROP TABLE web_socket_connection');
    }
}

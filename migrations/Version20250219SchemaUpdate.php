<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Migration for updating chat system from GroupChat to SubjectChat
 */
final class Version20250219SchemaUpdate extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Updates chat system from GroupChat to SubjectChat, including column renames and relationship changes';
    }

    public function up(Schema $schema): void
    {
        // Update group_chat table
        $this->addSql('ALTER TABLE group_chat ADD type VARCHAR(20) NOT NULL DEFAULT "teacher"');
        $this->addSql('ALTER TABLE group_chat ADD g0_create_at DATETIME NOT NULL COMMENT "(DC2Type:datetime_immutable)"');
        
        // Update message_chat relationships
        $this->addSql('ALTER TABLE message_chat DROP FOREIGN KEY FK_CC0869739C9A2529');
        $this->addSql('DROP INDEX IDX_CC0869739C9A2529 ON message_chat');
        $this->addSql('ALTER TABLE message_chat CHANGE group_chat_id subject_chat_id INT NOT NULL');
        $this->addSql('ALTER TABLE message_chat ADD CONSTRAINT FK_CC086973BF18DD87 FOREIGN KEY (subject_chat_id) REFERENCES group_chat (id)');
        $this->addSql('CREATE INDEX IDX_CC086973BF18DD87 ON message_chat (subject_chat_id)');
        
        // Update web_socket_connection relationships
        $this->addSql('ALTER TABLE web_socket_connection DROP FOREIGN KEY FK_7C4108E99C9A2529');
        $this->addSql('DROP INDEX IDX_7C4108E99C9A2529 ON web_socket_connection');
        $this->addSql('ALTER TABLE web_socket_connection ADD subject_chat_id INT DEFAULT NULL, DROP group_chat_id');
        $this->addSql('ALTER TABLE web_socket_connection ADD CONSTRAINT FK_7C4108E9BF18DD87 FOREIGN KEY (subject_chat_id) REFERENCES group_chat (id)');
        $this->addSql('CREATE INDEX IDX_7C4108E9BF18DD87 ON web_socket_connection (subject_chat_id)');
    }

    public function down(Schema $schema): void
    {
        // Revert web_socket_connection changes
        $this->addSql('ALTER TABLE web_socket_connection DROP FOREIGN KEY FK_7C4108E9BF18DD87');
        $this->addSql('DROP INDEX IDX_7C4108E9BF18DD87 ON web_socket_connection');
        $this->addSql('ALTER TABLE web_socket_connection ADD group_chat_id INT DEFAULT NULL, DROP subject_chat_id');
        $this->addSql('ALTER TABLE web_socket_connection ADD CONSTRAINT FK_7C4108E99C9A2529 FOREIGN KEY (group_chat_id) REFERENCES group_chat (id)');
        $this->addSql('CREATE INDEX IDX_7C4108E99C9A2529 ON web_socket_connection (group_chat_id)');
        
        // Revert message_chat changes
        $this->addSql('ALTER TABLE message_chat DROP FOREIGN KEY FK_CC086973BF18DD87');
        $this->addSql('DROP INDEX IDX_CC086973BF18DD87 ON message_chat');
        $this->addSql('ALTER TABLE message_chat CHANGE subject_chat_id group_chat_id INT NOT NULL');
        $this->addSql('ALTER TABLE message_chat ADD CONSTRAINT FK_CC0869739C9A2529 FOREIGN KEY (group_chat_id) REFERENCES group_chat (id)');
        $this->addSql('CREATE INDEX IDX_CC0869739C9A2529 ON message_chat (group_chat_id)');
        
        // Revert group_chat changes
        $this->addSql('ALTER TABLE group_chat DROP type, DROP g0_create_at');
    }
}

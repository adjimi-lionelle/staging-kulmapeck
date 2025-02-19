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
        return 'Updates chat system schema for SubjectChat implementation';
    }

    public function up(Schema $schema): void
    {
        // Add new columns to group_chat table if they don't exist
        $this->addSql('
            SET @column_exists = (
                SELECT COUNT(*) 
                FROM information_schema.COLUMNS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "group_chat"
                AND COLUMN_NAME = "type"
            );
            SET @add_column = IF(@column_exists = 0,
                "ALTER TABLE group_chat ADD type VARCHAR(20) NOT NULL DEFAULT \'teacher\' AFTER name",
                "SELECT 1"
            );
            PREPARE stmt FROM @add_column;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');

        $this->addSql('
            SET @column_exists = (
                SELECT COUNT(*) 
                FROM information_schema.COLUMNS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "group_chat"
                AND COLUMN_NAME = "g0_create_at"
            );
            SET @add_column = IF(@column_exists = 0,
                "ALTER TABLE group_chat ADD g0_create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\' AFTER type",
                "SELECT 1"
            );
            PREPARE stmt FROM @add_column;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');
        
        // Update message_chat relationships
        $this->addSql('
            SET @constraint_name = (
                SELECT CONSTRAINT_NAME 
                FROM information_schema.KEY_COLUMN_USAGE 
                WHERE TABLE_NAME = "message_chat" 
                AND COLUMN_NAME = "group_chat_id" 
                AND CONSTRAINT_NAME = "FK_CC0869739C9A2529"
                AND TABLE_SCHEMA = DATABASE()
            );
            SET @drop_fk = IF(@constraint_name IS NOT NULL,
                "ALTER TABLE message_chat DROP FOREIGN KEY FK_CC0869739C9A2529",
                "SELECT 1"
            );
            PREPARE stmt FROM @drop_fk;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');
        
        // Check and drop index if exists
        $this->addSql('
            SET @index_exists = (
                SELECT COUNT(*)
                FROM information_schema.STATISTICS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "message_chat"
                AND INDEX_NAME = "IDX_CC0869739C9A2529"
            );
            SET @drop_idx = IF(@index_exists > 0,
                "DROP INDEX IDX_CC0869739C9A2529 ON message_chat",
                "SELECT 1"
            );
            PREPARE stmt FROM @drop_idx;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');
        
        $this->addSql('ALTER TABLE message_chat CHANGE group_chat_id subject_chat_id INT NOT NULL');
        $this->addSql('ALTER TABLE message_chat ADD CONSTRAINT FK_CC086973BF18DD87 FOREIGN KEY (subject_chat_id) REFERENCES group_chat (id)');
        $this->addSql('CREATE INDEX IDX_CC086973BF18DD87 ON message_chat (subject_chat_id)');
        
        // Update web_socket_connection relationships
        $this->addSql('
            SET @constraint_name = (
                SELECT CONSTRAINT_NAME 
                FROM information_schema.KEY_COLUMN_USAGE 
                WHERE TABLE_NAME = "web_socket_connection" 
                AND COLUMN_NAME = "group_chat_id" 
                AND CONSTRAINT_NAME = "FK_7C4108E99C9A2529"
                AND TABLE_SCHEMA = DATABASE()
            );
            SET @drop_fk = IF(@constraint_name IS NOT NULL,
                "ALTER TABLE web_socket_connection DROP FOREIGN KEY FK_7C4108E99C9A2529",
                "SELECT 1"
            );
            PREPARE stmt FROM @drop_fk;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');
        
        // Check and drop index if exists
        $this->addSql('
            SET @index_exists = (
                SELECT COUNT(*)
                FROM information_schema.STATISTICS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "web_socket_connection"
                AND INDEX_NAME = "IDX_7C4108E99C9A2529"
            );
            SET @drop_idx = IF(@index_exists > 0,
                "DROP INDEX IDX_7C4108E99C9A2529 ON web_socket_connection",
                "SELECT 1"
            );
            PREPARE stmt FROM @drop_idx;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');
        
        // Check if subject_chat_id exists before adding
        $this->addSql('
            SET @column_exists = (
                SELECT COUNT(*) 
                FROM information_schema.COLUMNS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "web_socket_connection"
                AND COLUMN_NAME = "subject_chat_id"
            );
            SET @add_column = IF(@column_exists = 0,
                "ALTER TABLE web_socket_connection ADD subject_chat_id INT DEFAULT NULL",
                "SELECT 1"
            );
            PREPARE stmt FROM @add_column;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');

        $this->addSql('UPDATE web_socket_connection SET subject_chat_id = group_chat_id WHERE group_chat_id IS NOT NULL');
        
        // Check if group_chat_id still exists before dropping
        $this->addSql('
            SET @column_exists = (
                SELECT COUNT(*) 
                FROM information_schema.COLUMNS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "web_socket_connection"
                AND COLUMN_NAME = "group_chat_id"
            );
            SET @drop_column = IF(@column_exists > 0,
                "ALTER TABLE web_socket_connection DROP group_chat_id",
                "SELECT 1"
            );
            PREPARE stmt FROM @drop_column;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');
        
        $this->addSql('ALTER TABLE web_socket_connection ADD CONSTRAINT FK_7C4108E9BF18DD87 FOREIGN KEY (subject_chat_id) REFERENCES group_chat (id)');
        $this->addSql('CREATE INDEX IDX_7C4108E9BF18DD87 ON web_socket_connection (subject_chat_id)');
    }

    public function down(Schema $schema): void
    {
        // Revert web_socket_connection changes
        $this->addSql('ALTER TABLE web_socket_connection DROP FOREIGN KEY FK_7C4108E9BF18DD87');
        $this->addSql('DROP INDEX IDX_7C4108E9BF18DD87 ON web_socket_connection');
        $this->addSql('ALTER TABLE web_socket_connection ADD group_chat_id INT DEFAULT NULL');
        $this->addSql('UPDATE web_socket_connection SET group_chat_id = subject_chat_id WHERE subject_chat_id IS NOT NULL');
        $this->addSql('ALTER TABLE web_socket_connection DROP subject_chat_id');
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

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
        
        // Update message_chat relationships - check if rename is needed
        $this->addSql('
            SET @old_column_exists = (
                SELECT COUNT(*) 
                FROM information_schema.COLUMNS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "message_chat"
                AND COLUMN_NAME = "group_chat_id"
            );
            SET @new_column_exists = (
                SELECT COUNT(*) 
                FROM information_schema.COLUMNS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "message_chat"
                AND COLUMN_NAME = "subject_chat_id"
            );
        ');

        // Only proceed with message_chat changes if needed
        $this->addSql('
            SET @should_update = IF(@old_column_exists > 0 AND @new_column_exists = 0, 1, 0);
            SET @update_sql = IF(@should_update = 1,
                CONCAT(
                    "ALTER TABLE message_chat ",
                    "DROP FOREIGN KEY FK_CC0869739C9A2529, ",
                    "DROP INDEX IDX_CC0869739C9A2529, ",
                    "CHANGE group_chat_id subject_chat_id INT NOT NULL, ",
                    "ADD CONSTRAINT FK_CC086973BF18DD87 FOREIGN KEY (subject_chat_id) REFERENCES group_chat (id), ",
                    "CREATE INDEX IDX_CC086973BF18DD87 ON message_chat (subject_chat_id)"
                ),
                "SELECT 1"
            );
            PREPARE stmt FROM @update_sql;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');
        
        // Update web_socket_connection relationships - check columns first
        $this->addSql('
            SET @old_column_exists = (
                SELECT COUNT(*) 
                FROM information_schema.COLUMNS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "web_socket_connection"
                AND COLUMN_NAME = "group_chat_id"
            );
            SET @new_column_exists = (
                SELECT COUNT(*) 
                FROM information_schema.COLUMNS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "web_socket_connection"
                AND COLUMN_NAME = "subject_chat_id"
            );
        ');

        // Only proceed with web_socket_connection changes if needed
        $this->addSql('
            SET @should_update = IF(@old_column_exists > 0 AND @new_column_exists = 0, 1, 0);
            SET @update_sql = IF(@should_update = 1,
                CONCAT(
                    "ALTER TABLE web_socket_connection ",
                    "DROP FOREIGN KEY FK_7C4108E99C9A2529, ",
                    "DROP INDEX IDX_7C4108E99C9A2529, ",
                    "ADD subject_chat_id INT DEFAULT NULL"
                ),
                "SELECT 1"
            );
            PREPARE stmt FROM @update_sql;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');

        // Copy data and finish web_socket_connection changes if needed
        $this->addSql('
            SET @copy_sql = IF(@should_update = 1,
                CONCAT(
                    "UPDATE web_socket_connection SET subject_chat_id = group_chat_id WHERE group_chat_id IS NOT NULL; ",
                    "ALTER TABLE web_socket_connection DROP group_chat_id, ",
                    "ADD CONSTRAINT FK_7C4108E9BF18DD87 FOREIGN KEY (subject_chat_id) REFERENCES group_chat (id), ",
                    "CREATE INDEX IDX_7C4108E9BF18DD87 ON web_socket_connection (subject_chat_id)"
                ),
                "SELECT 1"
            );
            PREPARE stmt FROM @copy_sql;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');
    }

    public function down(Schema $schema): void
    {
        // Only revert if columns exist in their new form
        $this->addSql('
            SET @subject_chat_exists = (
                SELECT COUNT(*) 
                FROM information_schema.COLUMNS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "web_socket_connection"
                AND COLUMN_NAME = "subject_chat_id"
            );
        ');

        // Revert web_socket_connection changes if needed
        $this->addSql('
            SET @revert_sql = IF(@subject_chat_exists > 0,
                CONCAT(
                    "ALTER TABLE web_socket_connection ",
                    "DROP FOREIGN KEY FK_7C4108E9BF18DD87, ",
                    "DROP INDEX IDX_7C4108E9BF18DD87, ",
                    "ADD group_chat_id INT DEFAULT NULL, ",
                    "UPDATE web_socket_connection SET group_chat_id = subject_chat_id WHERE subject_chat_id IS NOT NULL, ",
                    "DROP subject_chat_id, ",
                    "ADD CONSTRAINT FK_7C4108E99C9A2529 FOREIGN KEY (group_chat_id) REFERENCES group_chat (id), ",
                    "CREATE INDEX IDX_7C4108E99C9A2529 ON web_socket_connection (group_chat_id)"
                ),
                "SELECT 1"
            );
            PREPARE stmt FROM @revert_sql;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');
        
        // Check message_chat column
        $this->addSql('
            SET @subject_chat_exists = (
                SELECT COUNT(*) 
                FROM information_schema.COLUMNS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "message_chat"
                AND COLUMN_NAME = "subject_chat_id"
            );
        ');

        // Revert message_chat changes if needed
        $this->addSql('
            SET @revert_sql = IF(@subject_chat_exists > 0,
                CONCAT(
                    "ALTER TABLE message_chat ",
                    "DROP FOREIGN KEY FK_CC086973BF18DD87, ",
                    "DROP INDEX IDX_CC086973BF18DD87, ",
                    "CHANGE subject_chat_id group_chat_id INT NOT NULL, ",
                    "ADD CONSTRAINT FK_CC0869739C9A2529 FOREIGN KEY (group_chat_id) REFERENCES group_chat (id), ",
                    "CREATE INDEX IDX_CC0869739C9A2529 ON message_chat (group_chat_id)"
                ),
                "SELECT 1"
            );
            PREPARE stmt FROM @revert_sql;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');
        
        // Check group_chat columns before dropping
        $this->addSql('
            SET @columns_exist = (
                SELECT COUNT(*) 
                FROM information_schema.COLUMNS 
                WHERE TABLE_SCHEMA = DATABASE()
                AND TABLE_NAME = "group_chat"
                AND COLUMN_NAME IN ("type", "g0_create_at")
            );
        ');

        // Revert group_chat changes if needed
        $this->addSql('
            SET @revert_sql = IF(@columns_exist > 0,
                "ALTER TABLE group_chat DROP type, DROP g0_create_at",
                "SELECT 1"
            );
            PREPARE stmt FROM @revert_sql;
            EXECUTE stmt;
            DEALLOCATE PREPARE stmt;
        ');
    }
}

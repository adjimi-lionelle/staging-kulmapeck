<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250312114603 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        
        $this->addSql('ALTER TABLE message_chat CHANGE teacher_persona_id teacher_persona_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message_chat RENAME INDEX fk_cc0869737fe72f19 TO IDX_CC0869737FE72F19');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
      
        $this->addSql('ALTER TABLE message_chat CHANGE teacher_persona_id teacher_persona_id INT NOT NULL');
        $this->addSql('ALTER TABLE message_chat RENAME INDEX idx_cc0869737fe72f19 TO FK_CC0869737FE72F19');
    }
}

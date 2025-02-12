<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250207210223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message_chat ADD sender_id INT NOT NULL, ADD is_from_ai TINYINT(1) NOT NULL, ADD is_read TINYINT(1) NOT NULL, ADD create_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE message_chat ADD CONSTRAINT FK_CC086973F624B39D FOREIGN KEY (sender_id) REFERENCES `kulmapeck_user` (id)');
        $this->addSql('CREATE INDEX IDX_CC086973F624B39D ON message_chat (sender_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE group_chat DROP create_at');
        $this->addSql('ALTER TABLE message_chat DROP FOREIGN KEY FK_CC086973F624B39D');
        $this->addSql('DROP INDEX IDX_CC086973F624B39D ON message_chat');
        $this->addSql('ALTER TABLE message_chat DROP sender_id, DROP is_from_ai, DROP is_read, DROP create_at');
    }
}

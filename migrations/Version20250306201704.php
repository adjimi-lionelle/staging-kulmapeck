<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250306201704 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
      

       /* $this->addSql('ALTER TABLE message_chat ADD teacher_persona_id INT NOT NULL, ADD expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD is_moderated TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE message_chat ADD CONSTRAINT FK_CC0869737FE72F19 FOREIGN KEY (teacher_persona_id) REFERENCES enseignant (id)');
        $this->addSql('ALTER TABLE subject_chat ADD eleve_id INT NOT NULL, ADD teacher_persona_id INT NOT NULL, DROP type');
        $this->addSql('ALTER TABLE subject_chat ADD CONSTRAINT FK_F7577671A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE subject_chat ADD CONSTRAINT FK_F75776717FE72F19 FOREIGN KEY (teacher_persona_id) REFERENCES enseignant (id)');
        $this->addSql('CREATE INDEX IDX_F7577671A6CC7B2 ON subject_chat (eleve_id)');
        $this->addSql('CREATE INDEX IDX_F75776717FE72F19 ON subject_chat (teacher_persona_id)');*/
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chapitre DROP FOREIGN KEY FK_8C62B0257ECF78B0');
        $this->addSql('ALTER TABLE chat_message DROP FOREIGN KEY FK_FAB3FC16CB944F1A');
        $this->addSql('ALTER TABLE chat_message DROP FOREIGN KEY FK_FAB3FC1623EDC87');
        $this->addSql('ALTER TABLE chat_message DROP is_read');
        $this->addSql('ALTER TABLE classe DROP FOREIGN KEY FK_8F87BF962195E0F0');
        $this->addSql('ALTER TABLE classe DROP FOREIGN KEY FK_8F87BF961D192655');
        $this->addSql('ALTER TABLE classe DROP FOREIGN KEY FK_8F87BF96D21722C4');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638A76ED395');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CE455FCC0');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CBCF5E72D');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C1D192655');
        $this->addSql('ALTER TABLE cours_classe DROP FOREIGN KEY FK_E007AEFE7ECF78B0');
        $this->addSql('ALTER TABLE cours_classe DROP FOREIGN KEY FK_E007AEFE8F5EA509');
        $this->addSql('ALTER TABLE cours_payment_method DROP FOREIGN KEY FK_BC1479C67ECF78B0');
        $this->addSql('ALTER TABLE cours_payment_method DROP FOREIGN KEY FK_BC1479C65AA1164F');
        $this->addSql('ALTER TABLE device DROP FOREIGN KEY FK_92FB68ECFEABE99');
        $this->addSql('ALTER TABLE eleve DROP FOREIGN KEY FK_ECA105F78F5EA509');
        $this->addSql('ALTER TABLE eleve DROP FOREIGN KEY FK_ECA105F7FB88E14F');
        $this->addSql('ALTER TABLE eleve DROP FOREIGN KEY FK_ECA105F7FF631228');
        $this->addSql('ALTER TABLE eleve_cours DROP FOREIGN KEY FK_E2AA9175A6CC7B2');
        $this->addSql('ALTER TABLE eleve_cours DROP FOREIGN KEY FK_E2AA91757ECF78B0');
        $this->addSql('ALTER TABLE enseignant DROP FOREIGN KEY FK_81A72FA1FB88E14F');
        $this->addSql('ALTER TABLE enseignant DROP FOREIGN KEY FK_81A72FA1FF631228');
        $this->addSql('ALTER TABLE enseignant DROP FOREIGN KEY FK_81A72FA1A5522701');
        $this->addSql('ALTER TABLE etablissement DROP FOREIGN KEY FK_20FD592CA6E44244');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A575F46CD258');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY FK_1323A575E455FCC0');
        $this->addSql('ALTER TABLE evaluation_classe DROP FOREIGN KEY FK_45F88A61456C5646');
        $this->addSql('ALTER TABLE evaluation_classe DROP FOREIGN KEY FK_45F88A618F5EA509');
        $this->addSql('ALTER TABLE evaluation_eleve DROP FOREIGN KEY FK_29567806456C5646');
        $this->addSql('ALTER TABLE evaluation_eleve DROP FOREIGN KEY FK_29567806A6CC7B2');
        $this->addSql('ALTER TABLE evaluation_question DROP FOREIGN KEY FK_BBB93068456C5646');
        $this->addSql('ALTER TABLE evaluation_resultat DROP FOREIGN KEY FK_EA9524C4456C5646');
        $this->addSql('ALTER TABLE evaluation_resultat DROP FOREIGN KEY FK_EA9524C4A6CC7B2');
        $this->addSql('ALTER TABLE exam DROP FOREIGN KEY FK_38BBA6C6A76ED395');
        $this->addSql('ALTER TABLE exam DROP FOREIGN KEY FK_38BBA6C68F5EA509');
        $this->addSql('ALTER TABLE exam DROP FOREIGN KEY FK_38BBA6C612469DE2');
        $this->addSql('ALTER TABLE faq DROP FOREIGN KEY FK_E8FF75CC7ECF78B0');
        $this->addSql('ALTER TABLE filiere DROP FOREIGN KEY FK_2ED05D9E5CD8AF54');
        $this->addSql('ALTER TABLE filiere_sous_systeme DROP FOREIGN KEY FK_FEBF7840180AA129');
        $this->addSql('ALTER TABLE filiere_sous_systeme DROP FOREIGN KEY FK_FEBF7840D21722C4');
        $this->addSql('ALTER TABLE formation_cours DROP FOREIGN KEY FK_8B4112E95200282E');
        $this->addSql('ALTER TABLE formation_cours DROP FOREIGN KEY FK_8B4112E97ECF78B0');
        $this->addSql('ALTER TABLE formation_eleve DROP FOREIGN KEY FK_9A2A9B825200282E');
        $this->addSql('ALTER TABLE formation_eleve DROP FOREIGN KEY FK_9A2A9B82A6CC7B2');
        $this->addSql('ALTER TABLE forum DROP FOREIGN KEY FK_852BBECD7ECF78B0');
        $this->addSql('ALTER TABLE forum_message DROP FOREIGN KEY FK_47717D0E6A99F74A');
        $this->addSql('ALTER TABLE forum_message DROP FOREIGN KEY FK_47717D0E7C4D497E');
        $this->addSql('ALTER TABLE forum_message DROP FOREIGN KEY FK_47717D0ED14CAE6C');
        $this->addSql('ALTER TABLE `kulmapeck_cours_like` DROP FOREIGN KEY FK_CAA5FE82F675F31B');
        $this->addSql('ALTER TABLE `kulmapeck_cours_like` DROP FOREIGN KEY FK_CAA5FE827ECF78B0');
        $this->addSql('DROP INDEX UNIQ_9BE902C8F85E0677 ON kulmapeck_user');
        $this->addSql('DROP INDEX UNIQ_9BE902C86B01BC5B ON kulmapeck_user');
        $this->addSql('ALTER TABLE kulmapeck_user CHANGE email email VARCHAR(180) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE username username VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone_number phone_number VARCHAR(180) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE lecture DROP FOREIGN KEY FK_C1677948A6CC7B2');
        $this->addSql('ALTER TABLE lecture DROP FOREIGN KEY FK_C1677948CDF80196');
        $this->addSql('ALTER TABLE lecture DROP FOREIGN KEY FK_C16779481FBEEF7B');
        $this->addSql('ALTER TABLE lecture DROP FOREIGN KEY FK_C16779487ECF78B0');
        $this->addSql('ALTER TABLE lesson DROP FOREIGN KEY FK_F87474F31FBEEF7B');
        $this->addSql('ALTER TABLE like_message_forum DROP FOREIGN KEY FK_983F8859D14CAE6C');
        $this->addSql('ALTER TABLE like_message_forum DROP FOREIGN KEY FK_983F88596A99F74A');
        $this->addSql('ALTER TABLE matiere_cycle DROP FOREIGN KEY FK_3C267FE6F46CD258');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C7ECF78B0');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB29FB88E14F');
        $this->addSql('ALTER TABLE membre_forum DROP FOREIGN KEY FK_330DB14C6A99F74A');
        $this->addSql('ALTER TABLE membre_forum DROP FOREIGN KEY FK_330DB14C29CCBAD0');
        $this->addSql('ALTER TABLE message_chat DROP FOREIGN KEY FK_CC0869737FE72F19');
        $this->addSql('DROP INDEX IDX_CC0869737FE72F19 ON message_chat');
        $this->addSql('ALTER TABLE message_chat DROP teacher_persona_id, DROP expires_at, DROP is_moderated');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CAA4F84F6E');
        $this->addSql('ALTER TABLE notification_setting DROP FOREIGN KEY FK_8A6A322FA76ED395');
        $this->addSql('ALTER TABLE notification_setting DROP FOREIGN KEY FK_8A6A322FD0520624');
        $this->addSql('ALTER TABLE notification_template DROP FOREIGN KEY FK_C2702726C54C8C93');
        $this->addSql('ALTER TABLE part_action DROP FOREIGN KEY FK_7E5C4C07A8F9CCCA');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840DA6CC7B2');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840DF1D74413');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840D7ECF78B0');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840D5AA1164F');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EFFB88E14F');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF727ACA70');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EFA6E44244');
        $this->addSql('ALTER TABLE personne CHANGE born_at born_at DATE NOT NULL, CHANGE sexe sexe VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE proposition DROP FOREIGN KEY FK_C7CDC353853CD175');
        $this->addSql('ALTER TABLE quiz DROP FOREIGN KEY FK_A412FA927ECF78B0');
        $this->addSql('ALTER TABLE quiz_lost DROP FOREIGN KEY FK_8AB478F17ECF78B0');
        $this->addSql('ALTER TABLE quiz_lost DROP FOREIGN KEY FK_8AB478F11FBEEF7B');
        $this->addSql('ALTER TABLE quiz_lost DROP FOREIGN KEY FK_8AB478F1A6CC7B2');
        $this->addSql('ALTER TABLE quiz_result DROP FOREIGN KEY FK_FE2E314A853CD175');
        $this->addSql('ALTER TABLE quiz_result DROP FOREIGN KEY FK_FE2E314AA6CC7B2');
        $this->addSql('ALTER TABLE quiz_result CHANGE result result JSON DEFAULT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC7A6CC7B2');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC7DB96F9E');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE retrait DROP FOREIGN KEY FK_D9846A51A76ED395');
        $this->addSql('ALTER TABLE retrait DROP FOREIGN KEY FK_D9846A515AA1164F');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C67ECF78B0');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6A6CC7B2');
        $this->addSql('ALTER TABLE specialite DROP FOREIGN KEY FK_E7D6FCC1180AA129');
        $this->addSql('ALTER TABLE subject_chat DROP FOREIGN KEY FK_F7577671A6CC7B2');
        $this->addSql('ALTER TABLE subject_chat DROP FOREIGN KEY FK_F75776717FE72F19');
        $this->addSql('DROP INDEX IDX_F7577671A6CC7B2 ON subject_chat');
        $this->addSql('DROP INDEX IDX_F75776717FE72F19 ON subject_chat');
        $this->addSql('ALTER TABLE subject_chat ADD type VARCHAR(20) NOT NULL, DROP eleve_id, DROP teacher_persona_id');
        $this->addSql('ALTER TABLE sujet DROP FOREIGN KEY FK_2E13599D6A99F74A');
        $this->addSql('ALTER TABLE sujet DROP FOREIGN KEY FK_2E13599D29CCBAD0');
        $this->addSql('ALTER TABLE user_filiere DROP FOREIGN KEY FK_76DD4394A76ED395');
        $this->addSql('ALTER TABLE user_filiere DROP FOREIGN KEY FK_76DD4394180AA129');
    }
}

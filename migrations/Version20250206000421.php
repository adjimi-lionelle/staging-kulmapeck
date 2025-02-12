<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250206000421 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chat_message (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, subject_id INT NOT NULL, content LONGTEXT NOT NULL, is_from_ai TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_FAB3FC16CB944F1A (student_id), INDEX IDX_FAB3FC1623EDC87 (subject_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE group_chat (id INT AUTO_INCREMENT NOT NULL, matiere_id INT NOT NULL, cycle INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_4CC7A9DAF46CD258 (matiere_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matiere_cycle (id INT AUTO_INCREMENT NOT NULL, matiere_id INT NOT NULL, cycle INT NOT NULL, INDEX IDX_3C267FE6F46CD258 (matiere_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE chat_message ADD CONSTRAINT FK_FAB3FC16CB944F1A FOREIGN KEY (student_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE chat_message ADD CONSTRAINT FK_FAB3FC1623EDC87 FOREIGN KEY (subject_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE group_chat ADD CONSTRAINT FK_4CC7A9DAF46CD258 FOREIGN KEY (matiere_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE matiere_cycle ADD CONSTRAINT FK_3C267FE6F46CD258 FOREIGN KEY (matiere_id) REFERENCES categorie (id)');
        $this->addSql('DROP TABLE refresh_token');
        $this->addSql('CREATE INDEX idx_categorie_name ON categorie (name)');
        $this->addSql('ALTER TABLE chapitre ADD CONSTRAINT FK_8C62B0257ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE classe ADD CONSTRAINT FK_8F87BF962195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id)');
        $this->addSql('ALTER TABLE classe ADD CONSTRAINT FK_8F87BF961D192655 FOREIGN KEY (skill_level_id) REFERENCES skill_level (id)');
        $this->addSql('ALTER TABLE classe ADD CONSTRAINT FK_8F87BF96D21722C4 FOREIGN KEY (sous_systeme_id) REFERENCES sous_systeme (id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638A76ED395 FOREIGN KEY (user_id) REFERENCES `kulmapeck_user` (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CE455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C1D192655 FOREIGN KEY (skill_level_id) REFERENCES skill_level (id)');
        $this->addSql('ALTER TABLE cours_classe ADD CONSTRAINT FK_E007AEFE7ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cours_classe ADD CONSTRAINT FK_E007AEFE8F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cours_payment_method ADD CONSTRAINT FK_BC1479C67ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cours_payment_method ADD CONSTRAINT FK_BC1479C65AA1164F FOREIGN KEY (payment_method_id) REFERENCES payment_method (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE device ADD CONSTRAINT FK_92FB68ECFEABE99 FOREIGN KEY (device_token_id) REFERENCES `kulmapeck_user` (id)');
        $this->addSql('ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F78F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id)');
        $this->addSql('ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES `kulmapeck_user` (id)');
        $this->addSql('ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F7FF631228 FOREIGN KEY (etablissement_id) REFERENCES etablissement (id)');
        $this->addSql('ALTER TABLE eleve_cours ADD CONSTRAINT FK_E2AA9175A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE eleve_cours ADD CONSTRAINT FK_E2AA91757ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE enseignant ADD CONSTRAINT FK_81A72FA1FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES `kulmapeck_user` (id)');
        $this->addSql('ALTER TABLE enseignant ADD CONSTRAINT FK_81A72FA1FF631228 FOREIGN KEY (etablissement_id) REFERENCES etablissement (id)');
        $this->addSql('ALTER TABLE enseignant ADD CONSTRAINT FK_81A72FA1A5522701 FOREIGN KEY (discipline_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE etablissement ADD CONSTRAINT FK_20FD592CA6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A575F46CD258 FOREIGN KEY (matiere_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT FK_1323A575E455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('ALTER TABLE evaluation_classe ADD CONSTRAINT FK_45F88A61456C5646 FOREIGN KEY (evaluation_id) REFERENCES evaluation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evaluation_classe ADD CONSTRAINT FK_45F88A618F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evaluation_eleve ADD CONSTRAINT FK_29567806456C5646 FOREIGN KEY (evaluation_id) REFERENCES evaluation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evaluation_eleve ADD CONSTRAINT FK_29567806A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evaluation_question ADD CONSTRAINT FK_BBB93068456C5646 FOREIGN KEY (evaluation_id) REFERENCES evaluation (id)');
        $this->addSql('ALTER TABLE evaluation_resultat ADD CONSTRAINT FK_EA9524C4456C5646 FOREIGN KEY (evaluation_id) REFERENCES evaluation (id)');
        $this->addSql('ALTER TABLE evaluation_resultat ADD CONSTRAINT FK_EA9524C4A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE exam ADD CONSTRAINT FK_38BBA6C6A76ED395 FOREIGN KEY (user_id) REFERENCES `kulmapeck_user` (id)');
        $this->addSql('ALTER TABLE exam ADD CONSTRAINT FK_38BBA6C68F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id)');
        $this->addSql('ALTER TABLE exam ADD CONSTRAINT FK_38BBA6C612469DE2 FOREIGN KEY (category_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE faq ADD CONSTRAINT FK_E8FF75CC7ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE filiere ADD CONSTRAINT FK_2ED05D9E5CD8AF54 FOREIGN KEY (type_enseignement_id) REFERENCES type_enseignement (id)');
        $this->addSql('ALTER TABLE filiere_sous_systeme ADD CONSTRAINT FK_FEBF7840180AA129 FOREIGN KEY (filiere_id) REFERENCES filiere (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE filiere_sous_systeme ADD CONSTRAINT FK_FEBF7840D21722C4 FOREIGN KEY (sous_systeme_id) REFERENCES sous_systeme (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_cours ADD CONSTRAINT FK_8B4112E95200282E FOREIGN KEY (formation_id) REFERENCES formation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_cours ADD CONSTRAINT FK_8B4112E97ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_eleve ADD CONSTRAINT FK_9A2A9B825200282E FOREIGN KEY (formation_id) REFERENCES formation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_eleve ADD CONSTRAINT FK_9A2A9B82A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE forum ADD CONSTRAINT FK_852BBECD7ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE forum_message ADD CONSTRAINT FK_47717D0E6A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id)');
        $this->addSql('ALTER TABLE forum_message ADD CONSTRAINT FK_47717D0E7C4D497E FOREIGN KEY (sujet_id) REFERENCES sujet (id)');
        $this->addSql('ALTER TABLE forum_message ADD CONSTRAINT FK_47717D0ED14CAE6C FOREIGN KEY (forum_message_id) REFERENCES forum_message (id)');
        $this->addSql('ALTER TABLE kulmapeck_cours_like ADD CONSTRAINT FK_CAA5FE82F675F31B FOREIGN KEY (author_id) REFERENCES `kulmapeck_user` (id)');
        $this->addSql('ALTER TABLE kulmapeck_cours_like ADD CONSTRAINT FK_CAA5FE827ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE kulmapeck_user CHANGE phone_number phone_number VARCHAR(180) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9BE902C8F85E0677 ON kulmapeck_user (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9BE902C86B01BC5B ON kulmapeck_user (phone_number)');
        $this->addSql('ALTER TABLE user_filiere ADD CONSTRAINT FK_76DD4394A76ED395 FOREIGN KEY (user_id) REFERENCES `kulmapeck_user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_filiere ADD CONSTRAINT FK_76DD4394180AA129 FOREIGN KEY (filiere_id) REFERENCES filiere (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE lecture ADD CONSTRAINT FK_C1677948A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE lecture ADD CONSTRAINT FK_C1677948CDF80196 FOREIGN KEY (lesson_id) REFERENCES lesson (id)');
        $this->addSql('ALTER TABLE lecture ADD CONSTRAINT FK_C16779481FBEEF7B FOREIGN KEY (chapitre_id) REFERENCES chapitre (id)');
        $this->addSql('ALTER TABLE lecture ADD CONSTRAINT FK_C16779487ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE lesson ADD CONSTRAINT FK_F87474F31FBEEF7B FOREIGN KEY (chapitre_id) REFERENCES chapitre (id)');
        $this->addSql('ALTER TABLE like_message_forum ADD CONSTRAINT FK_983F8859D14CAE6C FOREIGN KEY (forum_message_id) REFERENCES forum_message (id)');
        $this->addSql('ALTER TABLE like_message_forum ADD CONSTRAINT FK_983F88596A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id)');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C7ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB29FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES `kulmapeck_user` (id)');
        $this->addSql('ALTER TABLE membre_forum ADD CONSTRAINT FK_330DB14C6A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE membre_forum ADD CONSTRAINT FK_330DB14C29CCBAD0 FOREIGN KEY (forum_id) REFERENCES forum (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CAA4F84F6E FOREIGN KEY (destinataire_id) REFERENCES `kulmapeck_user` (id)');
        $this->addSql('ALTER TABLE notification_setting ADD CONSTRAINT FK_8A6A322FA76ED395 FOREIGN KEY (user_id) REFERENCES `kulmapeck_user` (id)');
        $this->addSql('ALTER TABLE notification_setting ADD CONSTRAINT FK_8A6A322FD0520624 FOREIGN KEY (notification_type_id) REFERENCES notification_type (id)');
        $this->addSql('ALTER TABLE notification_template ADD CONSTRAINT FK_C2702726C54C8C93 FOREIGN KEY (type_id) REFERENCES notification_type (id)');
        $this->addSql('ALTER TABLE payment ADD CONSTRAINT FK_6D28840DA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE payment ADD CONSTRAINT FK_6D28840DF1D74413 FOREIGN KEY (abonnement_id) REFERENCES abonnement (id)');
        $this->addSql('ALTER TABLE payment ADD CONSTRAINT FK_6D28840D7ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE payment ADD CONSTRAINT FK_6D28840D5AA1164F FOREIGN KEY (payment_method_id) REFERENCES payment_method (id)');
        $this->addSql('ALTER TABLE personne CHANGE born_at born_at DATE DEFAULT NULL, CHANGE sexe sexe VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EFFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES `kulmapeck_user` (id)');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EF727ACA70 FOREIGN KEY (parent_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE personne ADD CONSTRAINT FK_FCEC9EFA6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id)');
        $this->addSql('ALTER TABLE proposition ADD CONSTRAINT FK_C7CDC353853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (id)');
        $this->addSql('ALTER TABLE quiz ADD CONSTRAINT FK_A412FA921FBEEF7B FOREIGN KEY (chapitre_id) REFERENCES chapitre (id)');
        $this->addSql('ALTER TABLE quiz ADD CONSTRAINT FK_A412FA927ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE quiz_lost ADD CONSTRAINT FK_8AB478F17ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE quiz_lost ADD CONSTRAINT FK_8AB478F11FBEEF7B FOREIGN KEY (chapitre_id) REFERENCES chapitre (id)');
        $this->addSql('ALTER TABLE quiz_lost ADD CONSTRAINT FK_8AB478F1A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE quiz_result CHANGE result result JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE quiz_result ADD CONSTRAINT FK_FE2E314A853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (id)');
        $this->addSql('ALTER TABLE quiz_result ADD CONSTRAINT FK_FE2E314AA6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC7A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC7DB96F9E FOREIGN KEY (proposition_id) REFERENCES proposition (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES `kulmapeck_user` (id)');
        $this->addSql('ALTER TABLE retrait ADD CONSTRAINT FK_D9846A51A76ED395 FOREIGN KEY (user_id) REFERENCES `kulmapeck_user` (id)');
        $this->addSql('ALTER TABLE retrait ADD CONSTRAINT FK_D9846A515AA1164F FOREIGN KEY (payment_method_id) REFERENCES payment_method (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C67ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES eleve (id)');
        $this->addSql('ALTER TABLE specialite ADD CONSTRAINT FK_E7D6FCC1180AA129 FOREIGN KEY (filiere_id) REFERENCES filiere (id)');
        $this->addSql('ALTER TABLE sujet ADD CONSTRAINT FK_2E13599D6A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id)');
        $this->addSql('ALTER TABLE sujet ADD CONSTRAINT FK_2E13599D29CCBAD0 FOREIGN KEY (forum_id) REFERENCES forum (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE refresh_token (id INT AUTO_INCREMENT NOT NULL, refresh_token VARCHAR(128) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, username VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, valid DATETIME NOT NULL, UNIQUE INDEX UNIQ_C74F2195C74F2195 (refresh_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE chat_message DROP FOREIGN KEY FK_FAB3FC16CB944F1A');
        $this->addSql('ALTER TABLE chat_message DROP FOREIGN KEY FK_FAB3FC1623EDC87');
        $this->addSql('ALTER TABLE group_chat DROP FOREIGN KEY FK_4CC7A9DAF46CD258');
        $this->addSql('ALTER TABLE matiere_cycle DROP FOREIGN KEY FK_3C267FE6F46CD258');
        $this->addSql('DROP TABLE chat_message');
        $this->addSql('DROP TABLE group_chat');
        $this->addSql('DROP TABLE matiere_cycle');
        $this->addSql('DROP INDEX idx_categorie_name ON categorie');
        $this->addSql('ALTER TABLE chapitre DROP FOREIGN KEY FK_8C62B0257ECF78B0');
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
        $this->addSql('DROP INDEX UNIQ_9BE902C8F85E0677 ON `kulmapeck_user`');
        $this->addSql('DROP INDEX UNIQ_9BE902C86B01BC5B ON `kulmapeck_user`');
        $this->addSql('ALTER TABLE `kulmapeck_user` CHANGE phone_number phone_number VARCHAR(180) NOT NULL');
        $this->addSql('ALTER TABLE lecture DROP FOREIGN KEY FK_C1677948A6CC7B2');
        $this->addSql('ALTER TABLE lecture DROP FOREIGN KEY FK_C1677948CDF80196');
        $this->addSql('ALTER TABLE lecture DROP FOREIGN KEY FK_C16779481FBEEF7B');
        $this->addSql('ALTER TABLE lecture DROP FOREIGN KEY FK_C16779487ECF78B0');
        $this->addSql('ALTER TABLE lesson DROP FOREIGN KEY FK_F87474F31FBEEF7B');
        $this->addSql('ALTER TABLE like_message_forum DROP FOREIGN KEY FK_983F8859D14CAE6C');
        $this->addSql('ALTER TABLE like_message_forum DROP FOREIGN KEY FK_983F88596A99F74A');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C7ECF78B0');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB29FB88E14F');
        $this->addSql('ALTER TABLE membre_forum DROP FOREIGN KEY FK_330DB14C6A99F74A');
        $this->addSql('ALTER TABLE membre_forum DROP FOREIGN KEY FK_330DB14C29CCBAD0');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CAA4F84F6E');
        $this->addSql('ALTER TABLE notification_setting DROP FOREIGN KEY FK_8A6A322FA76ED395');
        $this->addSql('ALTER TABLE notification_setting DROP FOREIGN KEY FK_8A6A322FD0520624');
        $this->addSql('ALTER TABLE notification_template DROP FOREIGN KEY FK_C2702726C54C8C93');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840DA6CC7B2');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840DF1D74413');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840D7ECF78B0');
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840D5AA1164F');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EFFB88E14F');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EF727ACA70');
        $this->addSql('ALTER TABLE personne DROP FOREIGN KEY FK_FCEC9EFA6E44244');
        $this->addSql('ALTER TABLE personne CHANGE born_at born_at DATE NOT NULL, CHANGE sexe sexe VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE proposition DROP FOREIGN KEY FK_C7CDC353853CD175');
        $this->addSql('ALTER TABLE quiz DROP FOREIGN KEY FK_A412FA921FBEEF7B');
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
        $this->addSql('ALTER TABLE sujet DROP FOREIGN KEY FK_2E13599D6A99F74A');
        $this->addSql('ALTER TABLE sujet DROP FOREIGN KEY FK_2E13599D29CCBAD0');
        $this->addSql('ALTER TABLE user_filiere DROP FOREIGN KEY FK_76DD4394A76ED395');
        $this->addSql('ALTER TABLE user_filiere DROP FOREIGN KEY FK_76DD4394180AA129');
    }
}

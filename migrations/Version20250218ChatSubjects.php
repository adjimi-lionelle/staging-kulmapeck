<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250218ChatSubjects extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Links core subjects to all skill levels for chat functionality';
    }

    public function up(Schema $schema): void
    {
        // First ensure matiere_cycle table is empty to avoid duplicates
        $this->addSql('DELETE FROM matiere_cycle');

        // Core subjects IDs:
        // 2: MATHEMATIQUES
        // 3: SVT
        // 4: PHYSIQUES
        // 7: FRANCAIS
        // 9: ANGLAIS

        // Link each core subject to all skill levels (1-7)
        $this->addSql('INSERT INTO matiere_cycle (matiere_id, cycle) VALUES 
            (2, 1), (2, 2), (2, 3), (2, 4), (2, 5), (2, 6), (2, 7),  -- Mathematics for all levels
            (3, 1), (3, 2), (3, 3), (3, 4), (3, 5), (3, 6), (3, 7),  -- SVT for all levels
            (4, 1), (4, 2), (4, 3), (4, 4), (4, 5), (4, 6), (4, 7),  -- Physics for all levels
            (7, 1), (7, 2), (7, 3), (7, 4), (7, 5), (7, 6), (7, 7),  -- French for all levels
            (9, 1), (9, 2), (9, 3), (9, 4), (9, 5), (9, 6), (9, 7)   -- English for all levels
        ');

        // Ensure all existing students without a class are assigned to a default class (Sixième)
        $this->addSql('UPDATE eleve SET classe_id = 1 WHERE classe_id IS NULL');
    }

    public function down(Schema $schema): void
    {
        // We can safely remove all matiere_cycle entries as they can be recreated
        $this->addSql('DELETE FROM matiere_cycle');
        
        // We don't revert the classe_id assignment as it might break functionality
    }
}

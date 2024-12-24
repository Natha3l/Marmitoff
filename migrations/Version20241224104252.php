<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241224104252 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ingredient ADD COLUMN image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__ingredient AS SELECT id, nom FROM ingredient');
        $this->addSql('DROP TABLE ingredient');
        $this->addSql('CREATE TABLE ingredient (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO ingredient (id, nom) SELECT id, nom FROM __temp__ingredient');
        $this->addSql('DROP TABLE __temp__ingredient');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241129155845 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaire (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, recette_id INTEGER NOT NULL, message CLOB NOT NULL, CONSTRAINT FK_67F068BCA76ED395 FOREIGN KEY (user_id) REFERENCES user_guard (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_67F068BC89312FE9 FOREIGN KEY (recette_id) REFERENCES recette (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_67F068BCA76ED395 ON commentaire (user_id)');
        $this->addSql('CREATE INDEX IDX_67F068BC89312FE9 ON commentaire (recette_id)');
        $this->addSql('CREATE TABLE ingredient (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE "like" (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, recette_id INTEGER NOT NULL, CONSTRAINT FK_AC6340B3A76ED395 FOREIGN KEY (user_id) REFERENCES user_guard (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_AC6340B389312FE9 FOREIGN KEY (recette_id) REFERENCES recette (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_AC6340B3A76ED395 ON "like" (user_id)');
        $this->addSql('CREATE INDEX IDX_AC6340B389312FE9 ON "like" (recette_id)');
        $this->addSql('CREATE TABLE recette (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, description CLOB NOT NULL, image VARCHAR(255) NOT NULL, CONSTRAINT FK_49BB6390A76ED395 FOREIGN KEY (user_id) REFERENCES user_guard (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_49BB6390A76ED395 ON recette (user_id)');
        $this->addSql('CREATE TABLE recette_ingredient (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, recette_id INTEGER NOT NULL, ingredient_id INTEGER NOT NULL, CONSTRAINT FK_17C041A989312FE9 FOREIGN KEY (recette_id) REFERENCES recette (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_17C041A9933FE08C FOREIGN KEY (ingredient_id) REFERENCES ingredient (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_17C041A989312FE9 ON recette_ingredient (recette_id)');
        $this->addSql('CREATE INDEX IDX_17C041A9933FE08C ON recette_ingredient (ingredient_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE ingredient');
        $this->addSql('DROP TABLE "like"');
        $this->addSql('DROP TABLE recette');
        $this->addSql('DROP TABLE recette_ingredient');
    }
}

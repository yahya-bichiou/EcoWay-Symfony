<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250210184411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bande_commande (id INT AUTO_INCREMENT NOT NULL, reference VARCHAR(255) NOT NULL, datecommande DATETIME NOT NULL, fournisseur VARCHAR(255) NOT NULL, quantite_totale INT NOT NULL, statut VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bande_reception (id INT AUTO_INCREMENT NOT NULL, bande_commande_id INT NOT NULL, reference VARCHAR(255) NOT NULL, date_reception DATETIME NOT NULL, fournisseur VARCHAR(255) NOT NULL, quantite_recue INT NOT NULL, INDEX IDX_2CBB6E6D777D444E (bande_commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bande_reception ADD CONSTRAINT FK_2CBB6E6D777D444E FOREIGN KEY (bande_commande_id) REFERENCES bande_commande (id)');
        $this->addSql('ALTER TABLE depot CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL, CHANGE capacite capacite INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bande_reception DROP FOREIGN KEY FK_2CBB6E6D777D444E');
        $this->addSql('DROP TABLE bande_commande');
        $this->addSql('DROP TABLE bande_reception');
        $this->addSql('ALTER TABLE depot CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE adresse adresse VARCHAR(255) NOT NULL, CHANGE capacite capacite INT NOT NULL');
    }
}

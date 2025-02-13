<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250210192956 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, stock_produit_id INT DEFAULT NULL, nom VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, type VARCHAR(40) NOT NULL, qualite VARCHAR(20) NOT NULL, quantite_disponible INT NOT NULL, prix DOUBLE PRECISION NOT NULL, date_ajout DATETIME NOT NULL, INDEX IDX_29A5EC27A17D8957 (stock_produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stock_produit (id INT AUTO_INCREMENT NOT NULL, quantite_entrante INT DEFAULT NULL, quantite_sortante INT DEFAULT NULL, quantite_actuelle INT DEFAULT NULL, date_operation DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27A17D8957 FOREIGN KEY (stock_produit_id) REFERENCES stock_produit (id)');
        $this->addSql('ALTER TABLE collecte CHANGE quantite quantite DOUBLE PRECISION DEFAULT NULL, CHANGE responsable responsable VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27A17D8957');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE stock_produit');
        $this->addSql('ALTER TABLE collecte CHANGE quantite quantite DOUBLE PRECISION NOT NULL, CHANGE responsable responsable VARCHAR(255) NOT NULL');
    }
}

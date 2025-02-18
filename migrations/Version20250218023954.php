<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250218023954 extends AbstractMigration
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
        $this->addSql('CREATE TABLE collecte (id INT AUTO_INCREMENT NOT NULL, depot_id INT NOT NULL, quantite DOUBLE PRECISION DEFAULT NULL, date DATETIME DEFAULT NULL, responsable VARCHAR(255) DEFAULT NULL, INDEX IDX_55AE4A3D8510D4DE (depot_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commandes_boutique (id INT AUTO_INCREMENT NOT NULL, order_owner DOUBLE PRECISION NOT NULL, order_status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commandes_boutique_produits_boutique (commandes_boutique_id INT NOT NULL, produits_boutique_id INT NOT NULL, INDEX IDX_E08B658E6E29B5D (commandes_boutique_id), INDEX IDX_E08B65836B5646B (produits_boutique_id), PRIMARY KEY(commandes_boutique_id, produits_boutique_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE depot (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, capacite INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE phase (id INT AUTO_INCREMENT NOT NULL, num_p INT NOT NULL, description VARCHAR(255) DEFAULT NULL, date_p VARCHAR(255) DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plannig (id INT AUTO_INCREMENT NOT NULL, date_debut VARCHAR(255) DEFAULT NULL, date_fin VARCHAR(255) DEFAULT NULL, etapes VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, stock_produit_id INT DEFAULT NULL, stock_id INT DEFAULT NULL, nom VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, type VARCHAR(40) NOT NULL, qualite VARCHAR(20) NOT NULL, quantite_disponible INT NOT NULL, prix DOUBLE PRECISION NOT NULL, date_ajout DATETIME NOT NULL, INDEX IDX_29A5EC27A17D8957 (stock_produit_id), INDEX IDX_29A5EC27DCD6110 (stock_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produits_boutique (id INT AUTO_INCREMENT NOT NULL, product_name VARCHAR(255) DEFAULT NULL, product_desc VARCHAR(255) DEFAULT NULL, product_category VARCHAR(255) DEFAULT NULL, product_price DOUBLE PRECISION DEFAULT NULL, product_stock DOUBLE PRECISION DEFAULT NULL, product_image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stock_produit (id INT AUTO_INCREMENT NOT NULL, quantite_entrante INT DEFAULT NULL, quantite_sortante INT DEFAULT NULL, quantite_actuelle INT DEFAULT NULL, date_operation DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bande_reception ADD CONSTRAINT FK_2CBB6E6D777D444E FOREIGN KEY (bande_commande_id) REFERENCES bande_commande (id)');
        $this->addSql('ALTER TABLE collecte ADD CONSTRAINT FK_55AE4A3D8510D4DE FOREIGN KEY (depot_id) REFERENCES depot (id)');
        $this->addSql('ALTER TABLE commandes_boutique_produits_boutique ADD CONSTRAINT FK_E08B658E6E29B5D FOREIGN KEY (commandes_boutique_id) REFERENCES commandes_boutique (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commandes_boutique_produits_boutique ADD CONSTRAINT FK_E08B65836B5646B FOREIGN KEY (produits_boutique_id) REFERENCES produits_boutique (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27A17D8957 FOREIGN KEY (stock_produit_id) REFERENCES stock_produit (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27DCD6110 FOREIGN KEY (stock_id) REFERENCES stock_produit (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bande_reception DROP FOREIGN KEY FK_2CBB6E6D777D444E');
        $this->addSql('ALTER TABLE collecte DROP FOREIGN KEY FK_55AE4A3D8510D4DE');
        $this->addSql('ALTER TABLE commandes_boutique_produits_boutique DROP FOREIGN KEY FK_E08B658E6E29B5D');
        $this->addSql('ALTER TABLE commandes_boutique_produits_boutique DROP FOREIGN KEY FK_E08B65836B5646B');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27A17D8957');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27DCD6110');
        $this->addSql('DROP TABLE bande_commande');
        $this->addSql('DROP TABLE bande_reception');
        $this->addSql('DROP TABLE collecte');
        $this->addSql('DROP TABLE commandes_boutique');
        $this->addSql('DROP TABLE commandes_boutique_produits_boutique');
        $this->addSql('DROP TABLE depot');
        $this->addSql('DROP TABLE phase');
        $this->addSql('DROP TABLE plannig');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE produits_boutique');
        $this->addSql('DROP TABLE stock_produit');
    }
}

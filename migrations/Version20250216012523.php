<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250216012523 extends AbstractMigration
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
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE collecte (id INT AUTO_INCREMENT NOT NULL, depot_id INT NOT NULL, quantite DOUBLE PRECISION DEFAULT NULL, date DATETIME DEFAULT NULL, responsable VARCHAR(255) DEFAULT NULL, INDEX IDX_55AE4A3D8510D4DE (depot_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commandes_boutique (id INT AUTO_INCREMENT NOT NULL, order_owner DOUBLE PRECISION NOT NULL, order_status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commandes_boutique_produits_boutique (commandes_boutique_id INT NOT NULL, produits_boutique_id INT NOT NULL, INDEX IDX_E08B658E6E29B5D (commandes_boutique_id), INDEX IDX_E08B65836B5646B (produits_boutique_id), PRIMARY KEY(commandes_boutique_id, produits_boutique_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE depot (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, capacite INT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE phase (id INT AUTO_INCREMENT NOT NULL, num_p INT NOT NULL, description VARCHAR(255) DEFAULT NULL, date_p VARCHAR(255) DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plannig (id INT AUTO_INCREMENT NOT NULL, date_debut VARCHAR(255) DEFAULT NULL, date_fin VARCHAR(255) DEFAULT NULL, etapes VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, catégorie_id INT DEFAULT NULL, nom VARCHAR(100) NOT NULL, description LONGTEXT DEFAULT NULL, type VARCHAR(40) NOT NULL, qualite VARCHAR(20) NOT NULL, quantite_disponible INT NOT NULL, prix DOUBLE PRECISION NOT NULL, date_ajout DATETIME NOT NULL, image VARCHAR(255) DEFAULT NULL, INDEX IDX_29A5EC277A2E475A (catégorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produits_boutique (id INT AUTO_INCREMENT NOT NULL, product_name VARCHAR(255) DEFAULT NULL, product_desc VARCHAR(255) DEFAULT NULL, product_category VARCHAR(255) DEFAULT NULL, product_price DOUBLE PRECISION DEFAULT NULL, product_stock DOUBLE PRECISION DEFAULT NULL, product_image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, nom_r VARCHAR(255) NOT NULL, perm VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, role_id INT NOT NULL, nom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), INDEX IDX_1D1C63B3D60322AC (role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bande_reception ADD CONSTRAINT FK_2CBB6E6D777D444E FOREIGN KEY (bande_commande_id) REFERENCES bande_commande (id)');
        $this->addSql('ALTER TABLE collecte ADD CONSTRAINT FK_55AE4A3D8510D4DE FOREIGN KEY (depot_id) REFERENCES depot (id)');
        $this->addSql('ALTER TABLE commandes_boutique_produits_boutique ADD CONSTRAINT FK_E08B658E6E29B5D FOREIGN KEY (commandes_boutique_id) REFERENCES commandes_boutique (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commandes_boutique_produits_boutique ADD CONSTRAINT FK_E08B65836B5646B FOREIGN KEY (produits_boutique_id) REFERENCES produits_boutique (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC277A2E475A FOREIGN KEY (catégorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bande_reception DROP FOREIGN KEY FK_2CBB6E6D777D444E');
        $this->addSql('ALTER TABLE collecte DROP FOREIGN KEY FK_55AE4A3D8510D4DE');
        $this->addSql('ALTER TABLE commandes_boutique_produits_boutique DROP FOREIGN KEY FK_E08B658E6E29B5D');
        $this->addSql('ALTER TABLE commandes_boutique_produits_boutique DROP FOREIGN KEY FK_E08B65836B5646B');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC277A2E475A');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3D60322AC');
        $this->addSql('DROP TABLE bande_commande');
        $this->addSql('DROP TABLE bande_reception');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE collecte');
        $this->addSql('DROP TABLE commandes_boutique');
        $this->addSql('DROP TABLE commandes_boutique_produits_boutique');
        $this->addSql('DROP TABLE depot');
        $this->addSql('DROP TABLE phase');
        $this->addSql('DROP TABLE plannig');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE produits_boutique');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

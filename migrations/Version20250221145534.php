<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250221145534 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE collecte CHANGE quantite quantite DOUBLE PRECISION DEFAULT NULL, CHANGE date date DATETIME DEFAULT NULL, CHANGE responsable responsable VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE depot CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE phase CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE date_p date_p VARCHAR(255) DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE plannig CHANGE date_debut date_debut VARCHAR(255) DEFAULT NULL, CHANGE date_fin date_fin VARCHAR(255) DEFAULT NULL, CHANGE etapes etapes VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE produit CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE produits_boutique CHANGE product_name product_name VARCHAR(255) DEFAULT NULL, CHANGE product_desc product_desc VARCHAR(255) DEFAULT NULL, CHANGE product_category product_category VARCHAR(255) DEFAULT NULL, CHANGE product_price product_price DOUBLE PRECISION DEFAULT NULL, CHANGE product_stock product_stock DOUBLE PRECISION DEFAULT NULL, CHANGE product_image product_image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE collecte CHANGE quantite quantite DOUBLE PRECISION DEFAULT \'NULL\', CHANGE date date DATETIME DEFAULT \'NULL\', CHANGE responsable responsable VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE depot CHANGE nom nom VARCHAR(255) DEFAULT \'NULL\', CHANGE adresse adresse VARCHAR(255) DEFAULT \'NULL\', CHANGE image image VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\' COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE phase CHANGE description description VARCHAR(255) DEFAULT \'NULL\', CHANGE date_p date_p VARCHAR(255) DEFAULT \'NULL\', CHANGE status status VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE plannig CHANGE date_debut date_debut VARCHAR(255) DEFAULT \'NULL\', CHANGE date_fin date_fin VARCHAR(255) DEFAULT \'NULL\', CHANGE etapes etapes VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE produit CHANGE image image VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE produits_boutique CHANGE product_name product_name VARCHAR(255) DEFAULT \'NULL\', CHANGE product_desc product_desc VARCHAR(255) DEFAULT \'NULL\', CHANGE product_category product_category VARCHAR(255) DEFAULT \'NULL\', CHANGE product_price product_price DOUBLE PRECISION DEFAULT \'NULL\', CHANGE product_stock product_stock DOUBLE PRECISION DEFAULT \'NULL\', CHANGE product_image product_image VARCHAR(255) DEFAULT \'NULL\'');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250210170630 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits_boutique CHANGE product_name product_name VARCHAR(255) DEFAULT NULL, CHANGE product_desc product_desc VARCHAR(255) DEFAULT NULL, CHANGE product_category product_category VARCHAR(255) DEFAULT NULL, CHANGE product_price product_price DOUBLE PRECISION DEFAULT NULL, CHANGE product_stock product_stock DOUBLE PRECISION DEFAULT NULL, CHANGE product_image product_image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits_boutique CHANGE product_name product_name VARCHAR(255) NOT NULL, CHANGE product_desc product_desc VARCHAR(255) NOT NULL, CHANGE product_category product_category VARCHAR(255) NOT NULL, CHANGE product_price product_price DOUBLE PRECISION NOT NULL, CHANGE product_stock product_stock DOUBLE PRECISION NOT NULL, CHANGE product_image product_image VARCHAR(255) NOT NULL');
    }
}

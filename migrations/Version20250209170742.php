<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250209170742 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commandes_boutique_produits_boutique (commandes_boutique_id INT NOT NULL, produits_boutique_id INT NOT NULL, INDEX IDX_E08B658E6E29B5D (commandes_boutique_id), INDEX IDX_E08B65836B5646B (produits_boutique_id), PRIMARY KEY(commandes_boutique_id, produits_boutique_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commandes_boutique_produits_boutique ADD CONSTRAINT FK_E08B658E6E29B5D FOREIGN KEY (commandes_boutique_id) REFERENCES commandes_boutique (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commandes_boutique_produits_boutique ADD CONSTRAINT FK_E08B65836B5646B FOREIGN KEY (produits_boutique_id) REFERENCES produits_boutique (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commandes_boutique_produits_boutique DROP FOREIGN KEY FK_E08B658E6E29B5D');
        $this->addSql('ALTER TABLE commandes_boutique_produits_boutique DROP FOREIGN KEY FK_E08B65836B5646B');
        $this->addSql('DROP TABLE commandes_boutique_produits_boutique');
    }
}

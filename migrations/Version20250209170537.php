<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250209170537 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits_boutique DROP FOREIGN KEY FK_5E14C486E6E29B5D');
        $this->addSql('DROP INDEX IDX_5E14C486E6E29B5D ON produits_boutique');
        $this->addSql('ALTER TABLE produits_boutique DROP commandes_boutique_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits_boutique ADD commandes_boutique_id INT NOT NULL');
        $this->addSql('ALTER TABLE produits_boutique ADD CONSTRAINT FK_5E14C486E6E29B5D FOREIGN KEY (commandes_boutique_id) REFERENCES commandes_boutique (id)');
        $this->addSql('CREATE INDEX IDX_5E14C486E6E29B5D ON produits_boutique (commandes_boutique_id)');
    }
}

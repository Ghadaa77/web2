<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230504132625 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE feedbackp (id INT AUTO_INCREMENT NOT NULL, fk_id_user_id INT DEFAULT NULL, fk_id_produit_id INT DEFAULT NULL, favoris TINYINT(1) NOT NULL, INDEX IDX_E7656E33899DB076 (fk_id_user_id), INDEX IDX_E7656E33CEF48BEE (fk_id_produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, prix_produit DOUBLE PRECISION NOT NULL, type_paiement VARCHAR(255) NOT NULL, description_produit VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE feedbackp ADD CONSTRAINT FK_E7656E33899DB076 FOREIGN KEY (fk_id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE feedbackp ADD CONSTRAINT FK_E7656E33CEF48BEE FOREIGN KEY (fk_id_produit_id) REFERENCES produit (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE feedbackp DROP FOREIGN KEY FK_E7656E33899DB076');
        $this->addSql('ALTER TABLE feedbackp DROP FOREIGN KEY FK_E7656E33CEF48BEE');
        $this->addSql('DROP TABLE feedbackp');
        $this->addSql('DROP TABLE produit');
    }
}

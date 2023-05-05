<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230504113048 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE feedback ADD fk_id_service_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE feedback ADD CONSTRAINT FK_D22944582C9C5CF3 FOREIGN KEY (fk_id_service_id) REFERENCES service (id)');
        $this->addSql('CREATE INDEX IDX_D22944582C9C5CF3 ON feedback (fk_id_service_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE feedback DROP FOREIGN KEY FK_D22944582C9C5CF3');
        $this->addSql('DROP INDEX IDX_D22944582C9C5CF3 ON feedback');
        $this->addSql('ALTER TABLE feedback DROP fk_id_service_id');
    }
}

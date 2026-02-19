<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260219124129 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE objectif ADD titre VARCHAR(255) NOT NULL, ADD description LONGTEXT NOT NULL, ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE objectif ADD CONSTRAINT FK_E2F86851A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_E2F86851A76ED395 ON objectif (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE objectif DROP FOREIGN KEY FK_E2F86851A76ED395');
        $this->addSql('DROP INDEX IDX_E2F86851A76ED395 ON objectif');
        $this->addSql('ALTER TABLE objectif DROP titre, DROP description, DROP user_id');
    }
}

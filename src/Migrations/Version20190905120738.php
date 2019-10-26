<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190905120738 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE universite (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE campagne DROP INDEX UNIQ_539B5D167ECF78B0, ADD INDEX IDX_539B5D167ECF78B0 (cours_id)');
        $this->addSql('ALTER TABLE campagne ADD CONSTRAINT FK_539B5D167ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE universite');
        $this->addSql('ALTER TABLE campagne DROP INDEX IDX_539B5D167ECF78B0, ADD UNIQUE INDEX UNIQ_539B5D167ECF78B0 (cours_id)');
        $this->addSql('ALTER TABLE campagne DROP FOREIGN KEY FK_539B5D167ECF78B0');
    }
}

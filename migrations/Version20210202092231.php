<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210202092231 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE animes (id INT AUTO_INCREMENT NOT NULL, works_id INT NOT NULL, title VARCHAR(255) NOT NULL, episodes VARCHAR(255) NOT NULL, abstract LONGTEXT NOT NULL, studio VARCHAR(255) NOT NULL, specialedition VARCHAR(255) DEFAULT NULL, oav VARCHAR(255) DEFAULT NULL, broadcast VARCHAR(255) NOT NULL, INDEX IDX_83CFEBEEF6CB822A (works_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE animes ADD CONSTRAINT FK_83CFEBEEF6CB822A FOREIGN KEY (works_id) REFERENCES works (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE animes');
    }
}

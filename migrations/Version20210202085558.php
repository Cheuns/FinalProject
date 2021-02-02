<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210202085558 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE works_collectionfavoris (works_id INT NOT NULL, collectionfavoris_id INT NOT NULL, INDEX IDX_BF7313E2F6CB822A (works_id), INDEX IDX_BF7313E23A5C9664 (collectionfavoris_id), PRIMARY KEY(works_id, collectionfavoris_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE works_collectionfavoris ADD CONSTRAINT FK_BF7313E2F6CB822A FOREIGN KEY (works_id) REFERENCES works (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE works_collectionfavoris ADD CONSTRAINT FK_BF7313E23A5C9664 FOREIGN KEY (collectionfavoris_id) REFERENCES collection_favoris (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE works_collectionfavoris');
    }
}

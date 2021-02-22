<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210222135014 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE collection_favoris_works (collection_favoris_id INT NOT NULL, works_id INT NOT NULL, INDEX IDX_FEA19BEDF272AFDF (collection_favoris_id), INDEX IDX_FEA19BEDF6CB822A (works_id), PRIMARY KEY(collection_favoris_id, works_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test_works (test_id INT NOT NULL, works_id INT NOT NULL, INDEX IDX_FD3BA4481E5D0459 (test_id), INDEX IDX_FD3BA448F6CB822A (works_id), PRIMARY KEY(test_id, works_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE collection_favoris_works ADD CONSTRAINT FK_FEA19BEDF272AFDF FOREIGN KEY (collection_favoris_id) REFERENCES collection_favoris (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE collection_favoris_works ADD CONSTRAINT FK_FEA19BEDF6CB822A FOREIGN KEY (works_id) REFERENCES works (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE test_works ADD CONSTRAINT FK_FD3BA4481E5D0459 FOREIGN KEY (test_id) REFERENCES test (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE test_works ADD CONSTRAINT FK_FD3BA448F6CB822A FOREIGN KEY (works_id) REFERENCES works (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE works_collection_favoris');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE test_works DROP FOREIGN KEY FK_FD3BA4481E5D0459');
        $this->addSql('CREATE TABLE works_collection_favoris (works_id INT NOT NULL, collection_favoris_id INT NOT NULL, INDEX IDX_7B9EB74CF272AFDF (collection_favoris_id), INDEX IDX_7B9EB74CF6CB822A (works_id), PRIMARY KEY(works_id, collection_favoris_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE works_collection_favoris ADD CONSTRAINT FK_7B9EB74CF272AFDF FOREIGN KEY (collection_favoris_id) REFERENCES collection_favoris (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE works_collection_favoris ADD CONSTRAINT FK_7B9EB74CF6CB822A FOREIGN KEY (works_id) REFERENCES works (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('DROP TABLE collection_favoris_works');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE test_works');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210201134732 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE news ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE news ADD CONSTRAINT FK_1DD39950A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1DD39950A76ED395 ON news (user_id)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649B5A459A0');
        $this->addSql('DROP INDEX IDX_8D93D649B5A459A0 ON user');
        $this->addSql('ALTER TABLE user DROP news_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE news DROP FOREIGN KEY FK_1DD39950A76ED395');
        $this->addSql('DROP INDEX IDX_1DD39950A76ED395 ON news');
        $this->addSql('ALTER TABLE news DROP user_id');
        $this->addSql('ALTER TABLE user ADD news_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649B5A459A0 FOREIGN KEY (news_id) REFERENCES news (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_8D93D649B5A459A0 ON user (news_id)');
    }
}

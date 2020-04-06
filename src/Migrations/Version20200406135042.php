<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200406135042 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE boutique ADD publier TINYINT(1) NOT NULL, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buvette ADD publier TINYINT(1) NOT NULL, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE concert CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE objet_perdu CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE parking ADD publier TINYINT(1) NOT NULL, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stand_information CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE wc CHANGE map_id map_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE boutique DROP publier, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buvette DROP publier, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE concert CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE objet_perdu CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE parking DROP publier, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stand_information CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE wc CHANGE map_id map_id INT DEFAULT NULL');
    }
}

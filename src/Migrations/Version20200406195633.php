<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200406195633 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE boutique CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buvette CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE concert CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE objet_perdu CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE parking CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stand_information CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE wc CHANGE map_id map_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE boutique CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buvette CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE concert CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE objet_perdu CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE parking CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stand_information CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE wc CHANGE map_id map_id INT DEFAULT NULL');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200406134859 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE boutique ADD acces_hand TINYINT(1) NOT NULL, ADD latitude VARCHAR(255) NOT NULL, ADD longitude VARCHAR(255) NOT NULL, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buvette ADD acces_hand TINYINT(1) NOT NULL, ADD latitude VARCHAR(255) NOT NULL, ADD longitude VARCHAR(255) NOT NULL, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE concert ADD acces_hand TINYINT(1) NOT NULL, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement ADD acces_hand TINYINT(1) NOT NULL, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE objet_perdu CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE parking ADD acces_hand TINYINT(1) NOT NULL, ADD latitude VARCHAR(255) NOT NULL, ADD longitude VARCHAR(255) NOT NULL, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stand_information CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE wc CHANGE map_id map_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE boutique DROP acces_hand, DROP latitude, DROP longitude, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buvette DROP acces_hand, DROP latitude, DROP longitude, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE concert DROP acces_hand, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement DROP acces_hand, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE objet_perdu CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE parking DROP acces_hand, DROP latitude, DROP longitude, CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stand_information CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE wc CHANGE map_id map_id INT DEFAULT NULL');
    }
}

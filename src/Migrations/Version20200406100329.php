<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200406100329 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE objet_perdu (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, designation VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, information_supp VARCHAR(255) NOT NULL, acces_hand TINYINT(1) NOT NULL, date_trouve DATETIME NOT NULL, publier TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partenaire (id INT AUTO_INCREMENT NOT NULL, logo VARCHAR(255) NOT NULL, titre VARCHAR(255) NOT NULL, publier TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stand_information (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, designation VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, information_supp VARCHAR(255) NOT NULL, acces_hand TINYINT(1) NOT NULL, publier TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wc (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, designation VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, information_supp VARCHAR(255) NOT NULL, acces_hand TINYINT(1) NOT NULL, publier TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE boutique CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buvette CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE parking CHANGE map_id map_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE objet_perdu');
        $this->addSql('DROP TABLE partenaire');
        $this->addSql('DROP TABLE stand_information');
        $this->addSql('DROP TABLE wc');
        $this->addSql('ALTER TABLE boutique CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buvette CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE parking CHANGE map_id map_id INT DEFAULT NULL');
    }
}

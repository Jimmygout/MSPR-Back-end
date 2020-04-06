<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200406092510 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE billetterie (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, url_site VARCHAR(255) NOT NULL, publier TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE concert (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, designation VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, lieu VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, information_supp VARCHAR(255) NOT NULL, publier TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, designation VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, lieu VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, information VARCHAR(255) NOT NULL, publier TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE faq (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, designation VARCHAR(255) NOT NULL, queqtion VARCHAR(255) NOT NULL, reponse VARCHAR(255) NOT NULL, theme VARCHAR(255) NOT NULL, publier TINYINT(1) NOT NULL, date_post DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE information_generale (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, designation VARCHAR(255) NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, publier TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE information_urgente (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, designation VARCHAR(255) NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, publier TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reseaux_sociaux (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, designation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE boutique CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buvette ADD map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buvette ADD CONSTRAINT FK_85B3E53753C55F64 FOREIGN KEY (map_id) REFERENCES map (id)');
        $this->addSql('CREATE INDEX IDX_85B3E53753C55F64 ON buvette (map_id)');
        $this->addSql('ALTER TABLE map ADD longitude VARCHAR(255) NOT NULL, ADD latitude VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE parking CHANGE map_id map_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE billetterie');
        $this->addSql('DROP TABLE concert');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE faq');
        $this->addSql('DROP TABLE information_generale');
        $this->addSql('DROP TABLE information_urgente');
        $this->addSql('DROP TABLE reseaux_sociaux');
        $this->addSql('ALTER TABLE boutique CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buvette DROP FOREIGN KEY FK_85B3E53753C55F64');
        $this->addSql('DROP INDEX IDX_85B3E53753C55F64 ON buvette');
        $this->addSql('ALTER TABLE buvette DROP map_id');
        $this->addSql('ALTER TABLE map DROP longitude, DROP latitude');
        $this->addSql('ALTER TABLE parking CHANGE map_id map_id INT DEFAULT NULL');
    }
}

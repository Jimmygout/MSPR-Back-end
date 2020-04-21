<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200421090943 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE boutique DROP FOREIGN KEY FK_A1223C5453C55F64');
        $this->addSql('ALTER TABLE buvette DROP FOREIGN KEY FK_85B3E53753C55F64');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E53C55F64');
        $this->addSql('ALTER TABLE objet_perdu DROP FOREIGN KEY FK_4AA19C7053C55F64');
        $this->addSql('ALTER TABLE parking DROP FOREIGN KEY FK_B237527A53C55F64');
        $this->addSql('ALTER TABLE stand_information DROP FOREIGN KEY FK_8B4E03AC53C55F64');
        $this->addSql('ALTER TABLE wc DROP FOREIGN KEY FK_F51CCD2C53C55F64');
        $this->addSql('DROP TABLE information');
        $this->addSql('DROP TABLE map');
        $this->addSql('ALTER TABLE billetterie CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_A1223C5453C55F64 ON boutique');
        $this->addSql('ALTER TABLE boutique DROP map_id, CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_85B3E53753C55F64 ON buvette');
        $this->addSql('ALTER TABLE buvette DROP map_id, CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE chanteur CHANGE facebook facebook VARCHAR(255) DEFAULT NULL, CHANGE twitter twitter VARCHAR(255) DEFAULT NULL, CHANGE insta insta VARCHAR(255) DEFAULT NULL, CHANGE youtube youtube VARCHAR(255) DEFAULT NULL, CHANGE snapchat snapchat VARCHAR(255) DEFAULT NULL, CHANGE site site VARCHAR(255) DEFAULT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_B26681E53C55F64 ON evenement');
        $this->addSql('ALTER TABLE evenement DROP map_id, CHANGE image image VARCHAR(255) DEFAULT NULL, CHANGE lieu lieu VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE faq CHANGE designation designation VARCHAR(255) DEFAULT NULL, CHANGE date_post date_post DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE information_generale CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE information_urgente CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_4AA19C7053C55F64 ON objet_perdu');
        $this->addSql('ALTER TABLE objet_perdu DROP map_id, CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_B237527A53C55F64 ON parking');
        $this->addSql('ALTER TABLE parking DROP map_id, CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE partenaire CHANGE logo logo VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_8B4E03AC53C55F64 ON stand_information');
        $this->addSql('ALTER TABLE stand_information DROP map_id, CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
        $this->addSql('DROP INDEX IDX_F51CCD2C53C55F64 ON wc');
        $this->addSql('ALTER TABLE wc DROP map_id, CHANGE image image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE information (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, designation VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE map (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE billetterie CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE boutique ADD map_id INT DEFAULT NULL, CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE boutique ADD CONSTRAINT FK_A1223C5453C55F64 FOREIGN KEY (map_id) REFERENCES map (id)');
        $this->addSql('CREATE INDEX IDX_A1223C5453C55F64 ON boutique (map_id)');
        $this->addSql('ALTER TABLE buvette ADD map_id INT DEFAULT NULL, CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE buvette ADD CONSTRAINT FK_85B3E53753C55F64 FOREIGN KEY (map_id) REFERENCES map (id)');
        $this->addSql('CREATE INDEX IDX_85B3E53753C55F64 ON buvette (map_id)');
        $this->addSql('ALTER TABLE chanteur CHANGE facebook facebook VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE twitter twitter VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE insta insta VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE youtube youtube VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE snapchat snapchat VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE site site VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE evenement ADD map_id INT DEFAULT NULL, CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE lieu lieu VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E53C55F64 FOREIGN KEY (map_id) REFERENCES map (id)');
        $this->addSql('CREATE INDEX IDX_B26681E53C55F64 ON evenement (map_id)');
        $this->addSql('ALTER TABLE faq CHANGE designation designation VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_post date_post DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE information_generale CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE information_urgente CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE objet_perdu ADD map_id INT DEFAULT NULL, CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE objet_perdu ADD CONSTRAINT FK_4AA19C7053C55F64 FOREIGN KEY (map_id) REFERENCES map (id)');
        $this->addSql('CREATE INDEX IDX_4AA19C7053C55F64 ON objet_perdu (map_id)');
        $this->addSql('ALTER TABLE parking ADD map_id INT DEFAULT NULL, CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE parking ADD CONSTRAINT FK_B237527A53C55F64 FOREIGN KEY (map_id) REFERENCES map (id)');
        $this->addSql('CREATE INDEX IDX_B237527A53C55F64 ON parking (map_id)');
        $this->addSql('ALTER TABLE partenaire CHANGE logo logo VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE stand_information ADD map_id INT DEFAULT NULL, CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE stand_information ADD CONSTRAINT FK_8B4E03AC53C55F64 FOREIGN KEY (map_id) REFERENCES map (id)');
        $this->addSql('CREATE INDEX IDX_8B4E03AC53C55F64 ON stand_information (map_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE wc ADD map_id INT DEFAULT NULL, CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE wc ADD CONSTRAINT FK_F51CCD2C53C55F64 FOREIGN KEY (map_id) REFERENCES map (id)');
        $this->addSql('CREATE INDEX IDX_F51CCD2C53C55F64 ON wc (map_id)');
    }
}

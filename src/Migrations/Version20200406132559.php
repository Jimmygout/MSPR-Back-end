<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200406132559 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE boutique CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buvette CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE concert ADD map_id INT DEFAULT NULL, ADD latitude VARCHAR(255) NOT NULL, ADD longitude VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE concert ADD CONSTRAINT FK_D57C02D253C55F64 FOREIGN KEY (map_id) REFERENCES map (id)');
        $this->addSql('CREATE INDEX IDX_D57C02D253C55F64 ON concert (map_id)');
        $this->addSql('ALTER TABLE evenement ADD map_id INT DEFAULT NULL, ADD latitude VARCHAR(255) NOT NULL, ADD longitude VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E53C55F64 FOREIGN KEY (map_id) REFERENCES map (id)');
        $this->addSql('CREATE INDEX IDX_B26681E53C55F64 ON evenement (map_id)');
        $this->addSql('ALTER TABLE objet_perdu CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE parking CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stand_information ADD map_id INT DEFAULT NULL, ADD latitude VARCHAR(255) NOT NULL, ADD longitude VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE stand_information ADD CONSTRAINT FK_8B4E03AC53C55F64 FOREIGN KEY (map_id) REFERENCES map (id)');
        $this->addSql('CREATE INDEX IDX_8B4E03AC53C55F64 ON stand_information (map_id)');
        $this->addSql('ALTER TABLE wc CHANGE map_id map_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE boutique CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buvette CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE concert DROP FOREIGN KEY FK_D57C02D253C55F64');
        $this->addSql('DROP INDEX IDX_D57C02D253C55F64 ON concert');
        $this->addSql('ALTER TABLE concert DROP map_id, DROP latitude, DROP longitude');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E53C55F64');
        $this->addSql('DROP INDEX IDX_B26681E53C55F64 ON evenement');
        $this->addSql('ALTER TABLE evenement DROP map_id, DROP latitude, DROP longitude');
        $this->addSql('ALTER TABLE objet_perdu CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE parking CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stand_information DROP FOREIGN KEY FK_8B4E03AC53C55F64');
        $this->addSql('DROP INDEX IDX_8B4E03AC53C55F64 ON stand_information');
        $this->addSql('ALTER TABLE stand_information DROP map_id, DROP latitude, DROP longitude');
        $this->addSql('ALTER TABLE wc CHANGE map_id map_id INT DEFAULT NULL');
    }
}

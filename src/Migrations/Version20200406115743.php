<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200406115743 extends AbstractMigration
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
        $this->addSql('ALTER TABLE map DROP longitude, DROP latitude');
        $this->addSql('ALTER TABLE objet_perdu ADD map_id INT DEFAULT NULL, ADD longitude VARCHAR(255) NOT NULL, ADD latitude VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE objet_perdu ADD CONSTRAINT FK_4AA19C7053C55F64 FOREIGN KEY (map_id) REFERENCES map (id)');
        $this->addSql('CREATE INDEX IDX_4AA19C7053C55F64 ON objet_perdu (map_id)');
        $this->addSql('ALTER TABLE parking CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE wc ADD map_id INT DEFAULT NULL, ADD longitude VARCHAR(255) NOT NULL, ADD latitude VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE wc ADD CONSTRAINT FK_F51CCD2C53C55F64 FOREIGN KEY (map_id) REFERENCES map (id)');
        $this->addSql('CREATE INDEX IDX_F51CCD2C53C55F64 ON wc (map_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE boutique CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE buvette CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE map ADD longitude VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD latitude VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE objet_perdu DROP FOREIGN KEY FK_4AA19C7053C55F64');
        $this->addSql('DROP INDEX IDX_4AA19C7053C55F64 ON objet_perdu');
        $this->addSql('ALTER TABLE objet_perdu DROP map_id, DROP longitude, DROP latitude');
        $this->addSql('ALTER TABLE parking CHANGE map_id map_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE wc DROP FOREIGN KEY FK_F51CCD2C53C55F64');
        $this->addSql('DROP INDEX IDX_F51CCD2C53C55F64 ON wc');
        $this->addSql('ALTER TABLE wc DROP map_id, DROP longitude, DROP latitude');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200526194526 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE person (id INT AUTO_INCREMENT NOT NULL, civil_name VARCHAR(255) NOT NULL, gender VARCHAR(255) NOT NULL, cpf VARCHAR(255) NOT NULL, birth_date DATE NOT NULL, birth_state VARCHAR(255) NOT NULL, birth_city VARCHAR(255) NOT NULL, death_date DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE politician (id INT AUTO_INCREMENT NOT NULL, personal_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_B39BFB495D430949 (personal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE congressperson (id INT AUTO_INCREMENT NOT NULL, politician_id INT DEFAULT NULL, external_id INT NOT NULL, external_uri VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_2E015DAD899F0176 (politician_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE politician ADD CONSTRAINT FK_B39BFB495D430949 FOREIGN KEY (personal_id) REFERENCES person (id)');
        $this->addSql('ALTER TABLE congressperson ADD CONSTRAINT FK_2E015DAD899F0176 FOREIGN KEY (politician_id) REFERENCES politician (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE politician DROP FOREIGN KEY FK_B39BFB495D430949');
        $this->addSql('ALTER TABLE congressperson DROP FOREIGN KEY FK_2E015DAD899F0176');
        $this->addSql('DROP TABLE person');
        $this->addSql('DROP TABLE politician');
        $this->addSql('DROP TABLE congressperson');
    }
}

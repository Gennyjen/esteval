<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180202092231 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE User (id INT AUTO_INCREMENT NOT NULL, lastname VARCHAR(28) NOT NULL, firstname VARCHAR(28) NOT NULL, email TINYTEXT NOT NULL, phone INT NOT NULL, address VARCHAR(60) NOT NULL, zip INT NOT NULL, city VARCHAR(26) NOT NULL, country VARCHAR(26) NOT NULL, password TINYTEXT NOT NULL, fonction TINYTEXT NOT NULL, company TINYTEXT NOT NULL, tva TINYTEXT NOT NULL, is_company TINYINT(1) NOT NULL, choose_newsletter TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE UserBackoffice (id INT AUTO_INCREMENT NOT NULL, fonction TINYTEXT NOT NULL, firstname VARCHAR(28) NOT NULL, lastname VARCHAR(28) NOT NULL, email TINYTEXT NOT NULL, password TINYTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE comptes_utilisateurs');
        $this->addSql('ALTER TABLE articles ADD images VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE comptes_utilisateurs (id INT AUTO_INCREMENT NOT NULL, lastname VARCHAR(28) NOT NULL COLLATE utf8_unicode_ci, firstname VARCHAR(28) NOT NULL COLLATE utf8_unicode_ci, email TINYTEXT NOT NULL COLLATE utf8_unicode_ci, phone INT NOT NULL, address VARCHAR(60) NOT NULL COLLATE utf8_unicode_ci, zip INT NOT NULL, city VARCHAR(26) NOT NULL COLLATE utf8_unicode_ci, country VARCHAR(26) NOT NULL COLLATE utf8_unicode_ci, password TINYTEXT NOT NULL COLLATE utf8_unicode_ci, fonction TINYTEXT NOT NULL COLLATE utf8_unicode_ci, company TINYTEXT NOT NULL COLLATE utf8_unicode_ci, tva TINYTEXT NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE User');
        $this->addSql('DROP TABLE UserBackoffice');
        $this->addSql('ALTER TABLE articles DROP images');
    }
}

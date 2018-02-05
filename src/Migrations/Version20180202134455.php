<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180202134455 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE app_users (id INT AUTO_INCREMENT NOT NULL, lastname VARCHAR(28) NOT NULL, firstname VARCHAR(28) NOT NULL, email TINYTEXT NOT NULL, phone INT NOT NULL, address VARCHAR(60) NOT NULL, zip INT NOT NULL, city VARCHAR(26) NOT NULL, country VARCHAR(26) NOT NULL, password TINYTEXT NOT NULL, fonction TINYTEXT NOT NULL, company TINYTEXT NOT NULL, tva TINYTEXT NOT NULL, is_company TINYINT(1) NOT NULL, choose_newsletter TINYINT(1) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', username VARCHAR(25) NOT NULL, UNIQUE INDEX UNIQ_C2502824F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE UserBackoffice (id INT AUTO_INCREMENT NOT NULL, fonction TINYTEXT NOT NULL, firstname VARCHAR(28) NOT NULL, lastname VARCHAR(28) NOT NULL, email TINYTEXT NOT NULL, password TINYTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE comptes_utilisateurs');
        $this->addSql('DROP TABLE rubriques');
        $this->addSql('DROP TABLE users');
        $this->addSql('ALTER TABLE articles ADD images VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE comptes_utilisateurs (id INT AUTO_INCREMENT NOT NULL, lastname VARCHAR(28) NOT NULL COLLATE utf8_unicode_ci, firstname VARCHAR(28) NOT NULL COLLATE utf8_unicode_ci, email TINYTEXT NOT NULL COLLATE utf8_unicode_ci, phone INT NOT NULL, address VARCHAR(60) NOT NULL COLLATE utf8_unicode_ci, zip INT NOT NULL, city VARCHAR(26) NOT NULL COLLATE utf8_unicode_ci, country VARCHAR(26) NOT NULL COLLATE utf8_unicode_ci, password TINYTEXT NOT NULL COLLATE utf8_unicode_ci, fonction TINYTEXT NOT NULL COLLATE utf8_unicode_ci, company TINYTEXT NOT NULL COLLATE utf8_unicode_ci, tva TINYTEXT NOT NULL COLLATE utf8_unicode_ci, is_company TINYINT(1) NOT NULL, choose_newsletter TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rubriques (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, code VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, id_theme VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, nom VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, prenom VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, adresse VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, cp VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ville VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, pays VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, telephone VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, email VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, password VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, date_created DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE app_users');
        $this->addSql('DROP TABLE UserBackoffice');
        $this->addSql('ALTER TABLE articles DROP images');
    }
}

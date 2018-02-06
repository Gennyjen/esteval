<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180206103845 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE magasines (id INT AUTO_INCREMENT NOT NULL, numero INT NOT NULL, mois_parution DATE NOT NULL, titre VARCHAR(255) NOT NULL, couverture VARCHAR(255) NOT NULL, cat_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, lastname VARCHAR(28) NOT NULL, firstname VARCHAR(28) NOT NULL, email TINYTEXT NOT NULL, phone INT NOT NULL, address VARCHAR(60) NOT NULL, zip INT NOT NULL, city VARCHAR(26) NOT NULL, country VARCHAR(26) NOT NULL, password TINYTEXT NOT NULL, fonction TINYTEXT NOT NULL, company TINYTEXT NOT NULL, tva TINYTEXT NOT NULL, is_company TINYINT(1) NOT NULL, choose_newsletter TINYINT(1) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', is_active TINYINT(1) NOT NULL, username VARCHAR(25) NOT NULL, rdvfin DATETIME NOT NULL, UNIQUE INDEX UNIQ_1483A5E9F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rubriques (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, code VARCHAR(255) NOT NULL, id_theme INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE articles (id INT AUTO_INCREMENT NOT NULL, date_publication DATE NOT NULL, titre VARCHAR(255) NOT NULL, texte VARCHAR(255) NOT NULL, texte_raw VARCHAR(255) NOT NULL, images VARCHAR(255) NOT NULL, id_rubrique INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE magasines');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE rubriques');
        $this->addSql('DROP TABLE articles');
    }
}

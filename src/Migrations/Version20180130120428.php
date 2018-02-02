<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180130120428 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_backoffice (id INT AUTO_INCREMENT NOT NULL, fonction TINYTEXT NOT NULL, firstname VARCHAR(28) NOT NULL, lastname VARCHAR(28) NOT NULL, email TINYTEXT NOT NULL, password TINYTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, lastname VARCHAR(28) NOT NULL, firstname VARCHAR(28) NOT NULL, email TINYTEXT NOT NULL, phone INT NOT NULL, address VARCHAR(60) NOT NULL, zip INT NOT NULL, city VARCHAR(26) NOT NULL, country VARCHAR(26) NOT NULL, password TINYTEXT NOT NULL, fonction TINYTEXT NOT NULL, company TINYTEXT NOT NULL, tva TINYTEXT NOT NULL, is_company TINYINT(1) NOT NULL, choose_newsletter TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user_backoffice');
        $this->addSql('DROP TABLE user');
    }
}

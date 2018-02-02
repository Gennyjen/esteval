<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180201184015 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE UserBackoffice (id INT AUTO_INCREMENT NOT NULL, fonction TINYTEXT NOT NULL, firstname VARCHAR(28) NOT NULL, lastname VARCHAR(28) NOT NULL, email TINYTEXT NOT NULL, password TINYTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE articles (id INT AUTO_INCREMENT NOT NULL, date_publication DATE NOT NULL, titre VARCHAR(255) NOT NULL, texte VARCHAR(255) NOT NULL, texte_raw VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE user_backoffice');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_backoffice (id INT AUTO_INCREMENT NOT NULL, fonction TINYTEXT NOT NULL COLLATE utf8_unicode_ci, firstname VARCHAR(28) NOT NULL COLLATE utf8_unicode_ci, lastname VARCHAR(28) NOT NULL COLLATE utf8_unicode_ci, email TINYTEXT NOT NULL COLLATE utf8_unicode_ci, password TINYTEXT NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE UserBackoffice');
        $this->addSql('DROP TABLE articles');
    }
}

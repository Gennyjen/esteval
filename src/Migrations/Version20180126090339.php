<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180126090339 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE particulier DROP company, DROP tva, CHANGE lastname lastname VARCHAR(28) NOT NULL, CHANGE firstname firstname VARCHAR(28) NOT NULL, CHANGE address address VARCHAR(60) NOT NULL, CHANGE city city VARCHAR(26) NOT NULL, CHANGE country country VARCHAR(26) NOT NULL');
        $this->addSql('ALTER TABLE entreprise CHANGE lastname lastname VARCHAR(28) NOT NULL, CHANGE firstname firstname VARCHAR(28) NOT NULL, CHANGE address address VARCHAR(60) NOT NULL, CHANGE city city VARCHAR(26) NOT NULL, CHANGE country country VARCHAR(26) NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(40) NOT NULL COLLATE utf8_unicode_ci, lastname VARCHAR(40) NOT NULL COLLATE utf8_unicode_ci, mail VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, address VARCHAR(60) NOT NULL COLLATE utf8_unicode_ci, city VARCHAR(40) NOT NULL COLLATE utf8_unicode_ci, country VARCHAR(40) NOT NULL COLLATE utf8_unicode_ci, phone INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entreprise CHANGE lastname lastname VARCHAR(30) NOT NULL COLLATE utf8_unicode_ci, CHANGE firstname firstname VARCHAR(30) NOT NULL COLLATE utf8_unicode_ci, CHANGE address address VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, CHANGE city city VARCHAR(30) NOT NULL COLLATE utf8_unicode_ci, CHANGE country country VARCHAR(30) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE particulier ADD company VARCHAR(30) NOT NULL COLLATE utf8_unicode_ci, ADD tva VARCHAR(30) NOT NULL COLLATE utf8_unicode_ci, CHANGE lastname lastname VARCHAR(30) NOT NULL COLLATE utf8_unicode_ci, CHANGE firstname firstname VARCHAR(30) NOT NULL COLLATE utf8_unicode_ci, CHANGE address address VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, CHANGE city city VARCHAR(30) NOT NULL COLLATE utf8_unicode_ci, CHANGE country country VARCHAR(30) NOT NULL COLLATE utf8_unicode_ci');
    }
}

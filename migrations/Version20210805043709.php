<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210805043709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cliente (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, cpf INT NOT NULL, nascimento DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE operadora (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE telefone (id INT AUTO_INCREMENT NOT NULL, cliente_id INT DEFAULT NULL, operadora_id INT DEFAULT NULL, ddd INT NOT NULL, numero INT NOT NULL, INDEX IDX_2132E361DE734E51 (cliente_id), UNIQUE INDEX UNIQ_2132E36135380935 (operadora_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE telefone ADD CONSTRAINT FK_2132E361DE734E51 FOREIGN KEY (cliente_id) REFERENCES cliente (id)');
        $this->addSql('ALTER TABLE telefone ADD CONSTRAINT FK_2132E36135380935 FOREIGN KEY (operadora_id) REFERENCES operadora (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE telefone DROP FOREIGN KEY FK_2132E361DE734E51');
        $this->addSql('ALTER TABLE telefone DROP FOREIGN KEY FK_2132E36135380935');
        $this->addSql('DROP TABLE cliente');
        $this->addSql('DROP TABLE operadora');
        $this->addSql('DROP TABLE telefone');
    }
}

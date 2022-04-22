<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210329171057 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie ADD id INT AUTO_INCREMENT NOT NULL, CHANGE idc id_categorie INT NOT NULL, CHANGE nomc nom_categorie VARCHAR(255) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE cinema DROP FOREIGN KEY FK_D48304B48244BE22');
        $this->addSql('ALTER TABLE cinema ADD CONSTRAINT FK_D48304B48244BE22 FOREIGN KEY (film) REFERENCES film (id_film)');
        $this->addSql('ALTER TABLE evenement ADD id_event INT NOT NULL, ADD nom_event VARCHAR(255) NOT NULL, ADD date_event DATE NOT NULL, ADD date_event_fin DATE NOT NULL, DROP nomEvent, DROP dateEvent, DROP dureeEvent, DROP dateEventFin, DROP etat, DROP place');
        $this->addSql('ALTER TABLE film DROP INDEX IDX_8244BE22497DD634, ADD UNIQUE INDEX UNIQ_8244BE22497DD634 (categorie)');
        $this->addSql('ALTER TABLE plat DROP FOREIGN KEY FK_2038A207A4C43CD5');
        $this->addSql('DROP INDEX IDX_2038A207A4C43CD5 ON plat');
        $this->addSql('ALTER TABLE plat ADD id INT AUTO_INCREMENT NOT NULL, ADD id_plat INT NOT NULL, ADD nom_plat VARCHAR(255) NOT NULL, ADD prix_plat INT NOT NULL, ADD categorie_plat VARCHAR(255) NOT NULL, DROP idp, DROP nomp, DROP prixp, DROP Categorie_id, DROP imagep, CHANGE description description_plat LONGTEXT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE reclamation MODIFY idrec INT NOT NULL');
        $this->addSql('DROP INDEX IDX_CE606404C325A696 ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE reclamation ADD id_rec INT NOT NULL, ADD date_rec DATE NOT NULL, DROP abonne_id, DROP datee, DROP rate, CHANGE description description VARCHAR(255) NOT NULL, CHANGE field field VARCHAR(255) NOT NULL, CHANGE idrec id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE user DROP nom, DROP prenom, DROP mail, DROP mdp');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE categorie DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE categorie DROP id, CHANGE id_categorie idc INT NOT NULL, CHANGE nom_categorie nomc VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE categorie ADD PRIMARY KEY (idc)');
        $this->addSql('ALTER TABLE cinema DROP FOREIGN KEY FK_D48304B48244BE22');
        $this->addSql('ALTER TABLE cinema ADD CONSTRAINT FK_D48304B48244BE22 FOREIGN KEY (film) REFERENCES film (id_film) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement ADD dateEvent DATETIME NOT NULL, ADD dateEventFin DATETIME NOT NULL, ADD etat VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, ADD place INT NOT NULL, DROP date_event, DROP date_event_fin, CHANGE nom_event nomEvent VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, CHANGE id_event dureeEvent INT NOT NULL');
        $this->addSql('ALTER TABLE film DROP INDEX UNIQ_8244BE22497DD634, ADD INDEX IDX_8244BE22497DD634 (categorie)');
        $this->addSql('ALTER TABLE plat MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE plat DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE plat ADD idp INT NOT NULL, ADD nomp VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD prixp INT NOT NULL, ADD Categorie_id INT DEFAULT NULL, ADD imagep VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP id, DROP id_plat, DROP nom_plat, DROP prix_plat, DROP categorie_plat, CHANGE description_plat description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE plat ADD CONSTRAINT FK_2038A207A4C43CD5 FOREIGN KEY (Categorie_id) REFERENCES categorie (idc)');
        $this->addSql('CREATE INDEX IDX_2038A207A4C43CD5 ON plat (Categorie_id)');
        $this->addSql('ALTER TABLE plat ADD PRIMARY KEY (idp)');
        $this->addSql('ALTER TABLE reclamation MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE reclamation ADD abonne_id INT DEFAULT NULL, ADD datee DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, ADD rate DOUBLE PRECISION NOT NULL, DROP id_rec, DROP date_rec, CHANGE description description VARCHAR(600) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE field field VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE id idrec INT AUTO_INCREMENT NOT NULL');
        $this->addSql('CREATE INDEX IDX_CE606404C325A696 ON reclamation (abonne_id)');
        $this->addSql('ALTER TABLE reclamation ADD PRIMARY KEY (idrec)');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user ADD nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD prenom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD mail VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD mdp VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210830150518 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(55) NOT NULL, UNIQUE INDEX UNIQ_64C19C15E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, score_id INT DEFAULT NULL, INDEX IDX_232B318CA76ED395 (user_id), UNIQUE INDEX UNIQ_232B318C12EB0A51 (score_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game_quizzes (game_id INT NOT NULL, quizz_id INT NOT NULL, INDEX IDX_11EE09AE48FD905 (game_id), UNIQUE INDEX UNIQ_11EE09ABA934BCD (quizz_id), PRIMARY KEY(game_id, quizz_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, label VARCHAR(255) NOT NULL, difficulty INT NOT NULL, UNIQUE INDEX UNIQ_B6F7494EEA750E8 (label), INDEX IDX_B6F7494E12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question_responses (question_id INT NOT NULL, response_id INT NOT NULL, INDEX IDX_388ADB0F1E27F6BF (question_id), UNIQUE INDEX UNIQ_388ADB0FFBF32840 (response_id), PRIMARY KEY(question_id, response_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quizz (id INT AUTO_INCREMENT NOT NULL, question_id INT NOT NULL, is_correct TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_7C77973D1E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE response (id INT AUTO_INCREMENT NOT NULL, is_correct TINYINT(1) NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, role_name VARCHAR(55) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE score (id INT AUTO_INCREMENT NOT NULL, score INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, role_id INT NOT NULL, email VARCHAR(60) NOT NULL, firstname VARCHAR(50) DEFAULT NULL, lastname VARCHAR(50) DEFAULT NULL, image LONGTEXT DEFAULT NULL, password VARCHAR(3000) NOT NULL, username VARCHAR(60) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), INDEX IDX_8D93D649D60322AC (role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318C12EB0A51 FOREIGN KEY (score_id) REFERENCES score (id)');
        $this->addSql('ALTER TABLE game_quizzes ADD CONSTRAINT FK_11EE09AE48FD905 FOREIGN KEY (game_id) REFERENCES game (id)');
        $this->addSql('ALTER TABLE game_quizzes ADD CONSTRAINT FK_11EE09ABA934BCD FOREIGN KEY (quizz_id) REFERENCES quizz (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE question_responses ADD CONSTRAINT FK_388ADB0F1E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE question_responses ADD CONSTRAINT FK_388ADB0FFBF32840 FOREIGN KEY (response_id) REFERENCES response (id)');
        $this->addSql('ALTER TABLE quizz ADD CONSTRAINT FK_7C77973D1E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E12469DE2');
        $this->addSql('ALTER TABLE game_quizzes DROP FOREIGN KEY FK_11EE09AE48FD905');
        $this->addSql('ALTER TABLE question_responses DROP FOREIGN KEY FK_388ADB0F1E27F6BF');
        $this->addSql('ALTER TABLE quizz DROP FOREIGN KEY FK_7C77973D1E27F6BF');
        $this->addSql('ALTER TABLE game_quizzes DROP FOREIGN KEY FK_11EE09ABA934BCD');
        $this->addSql('ALTER TABLE question_responses DROP FOREIGN KEY FK_388ADB0FFBF32840');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D60322AC');
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318C12EB0A51');
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318CA76ED395');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE game');
        $this->addSql('DROP TABLE game_quizzes');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE question_responses');
        $this->addSql('DROP TABLE quizz');
        $this->addSql('DROP TABLE response');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE score');
        $this->addSql('DROP TABLE user');
    }
}

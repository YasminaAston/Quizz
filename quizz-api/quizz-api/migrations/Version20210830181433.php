<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210830181433 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE game_quizzes (game_id INT NOT NULL, quizz_id INT NOT NULL, INDEX IDX_11EE09AE48FD905 (game_id), UNIQUE INDEX UNIQ_11EE09ABA934BCD (quizz_id), PRIMARY KEY(game_id, quizz_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question_responses (question_id INT NOT NULL, response_id INT NOT NULL, INDEX IDX_388ADB0F1E27F6BF (question_id), UNIQUE INDEX UNIQ_388ADB0FFBF32840 (response_id), PRIMARY KEY(question_id, response_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE game_quizzes ADD CONSTRAINT FK_11EE09AE48FD905 FOREIGN KEY (game_id) REFERENCES game (id)');
        $this->addSql('ALTER TABLE game_quizzes ADD CONSTRAINT FK_11EE09ABA934BCD FOREIGN KEY (quizz_id) REFERENCES quizz (id)');
        $this->addSql('ALTER TABLE question_responses ADD CONSTRAINT FK_388ADB0F1E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE question_responses ADD CONSTRAINT FK_388ADB0FFBF32840 FOREIGN KEY (response_id) REFERENCES response (id)');
        $this->addSql('ALTER TABLE category CHANGE name name VARCHAR(55) NOT NULL');
        $this->addSql('ALTER TABLE category RENAME INDEX name TO UNIQ_64C19C15E237E06');
        $this->addSql('ALTER TABLE game DROP INDEX FKng1j875nyvy2ajwns328t9ddu, ADD UNIQUE INDEX UNIQ_232B318C12EB0A51 (score_id)');
        $this->addSql('ALTER TABLE game CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE game RENAME INDEX fkefqw7nsur06wyld1gavn3ic6b TO IDX_232B318CA76ED395');
        $this->addSql('ALTER TABLE question CHANGE category_id category_id INT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B6F7494EEA750E8 ON question (label)');
        $this->addSql('ALTER TABLE question RENAME INDEX fk7jaqbm9p4prg7n91dd1uabrvj TO IDX_B6F7494E12469DE2');
        $this->addSql('ALTER TABLE quizz DROP INDEX FK3k8gf7ybuvr8yrreixdo03mme, ADD UNIQUE INDEX UNIQ_7C77973D1E27F6BF (question_id)');
        $this->addSql('ALTER TABLE quizz ADD is_correct TINYINT(1) DEFAULT NULL, CHANGE question_id question_id INT NOT NULL');
        $this->addSql('ALTER TABLE role CHANGE role_name role_name VARCHAR(55) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE role_id role_id INT NOT NULL, CHANGE email email VARCHAR(60) NOT NULL, CHANGE firstname firstname VARCHAR(50) DEFAULT NULL, CHANGE lastname lastname VARCHAR(50) DEFAULT NULL, CHANGE username username VARCHAR(60) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON user (username)');
        $this->addSql('ALTER TABLE user RENAME INDEX email TO UNIQ_8D93D649E7927C74');
        $this->addSql('ALTER TABLE user RENAME INDEX fkn82ha3ccdebhokx3a8fgdqeyy TO IDX_8D93D649D60322AC');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE game_quizzes');
        $this->addSql('DROP TABLE question_responses');
        $this->addSql('ALTER TABLE category CHANGE name name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE category RENAME INDEX uniq_64c19c15e237e06 TO name');
        $this->addSql('ALTER TABLE game DROP INDEX UNIQ_232B318C12EB0A51, ADD INDEX FKng1j875nyvy2ajwns328t9ddu (score_id)');
        $this->addSql('ALTER TABLE game CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE game RENAME INDEX idx_232b318ca76ed395 TO FKefqw7nsur06wyld1gavn3ic6b');
        $this->addSql('DROP INDEX UNIQ_B6F7494EEA750E8 ON question');
        $this->addSql('ALTER TABLE question CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE question RENAME INDEX idx_b6f7494e12469de2 TO FK7jaqbm9p4prg7n91dd1uabrvj');
        $this->addSql('ALTER TABLE quizz DROP INDEX UNIQ_7C77973D1E27F6BF, ADD INDEX FK3k8gf7ybuvr8yrreixdo03mme (question_id)');
        $this->addSql('ALTER TABLE quizz DROP is_correct, CHANGE question_id question_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE role CHANGE role_name role_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('DROP INDEX UNIQ_8D93D649F85E0677 ON user');
        $this->addSql('ALTER TABLE user CHANGE role_id role_id INT DEFAULT NULL, CHANGE email email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE firstname firstname VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE lastname lastname VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE username username VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user RENAME INDEX uniq_8d93d649e7927c74 TO email');
        $this->addSql('ALTER TABLE user RENAME INDEX idx_8d93d649d60322ac TO FKn82ha3ccdebhokx3a8fgdqeyy');
    }
}

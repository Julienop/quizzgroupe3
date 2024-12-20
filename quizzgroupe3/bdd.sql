CREATE DATABASE quiz CHARSET utf8mb4;
USE quiz;

CREATE TABLE Users (
    id INT PRIMARY KEY,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(100),
    roles VARCHAR(255),
    avatar VARCHAR(255)
)ENGINE=InnoDB;

CREATE TABLE quizz (
    id INT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    img VARCHAR(255)
)ENGINE=InnoDB;

CREATE TABLE question (
    id INT PRIMARY KEY,
    title VARCHAR(100),
    description VARCHAR(255),
    img VARCHAR(255),
    multiple INT
)ENGINE=InnoDB;

CREATE TABLE answer (
    id INT PRIMARY KEY,
    text VARCHAR(100),
    valid BOOLEAN,
    answer_point INT,
    question_id INT
)ENGINE=InnoDB;

CREATE TABLE category (
    id INT PRIMARY KEY,
    title VARCHAR(50)
)ENGINE=InnoDB;

CREATE TABLE played (
    id INT PRIMARY KEY,
    succesfull BOOLEAN,
    create_at DATETIME,
    user_id INT,
    quizz_id INT,
    question_id INT
)ENGINE=InnoDB;

CREATE TABLE to_answer (
    answer_id INT,
    played_id INT,
    PRIMARY KEY (answer_id, played_id)
)ENGINE=InnoDB;

CREATE TABLE to_qualify (
    category_id INT,
    quizz_id INT,
    PRIMARY KEY (category_id, quizz_id)
)ENGINE=InnoDB;

CREATE TABLE to_contain (
    question_id INT,
    quizz_id INT,
    PRIMARY KEY (question_id, quizz_id)
)ENGINE=InnoDB;
ALTER TABLE answer
ADD CONSTRAINT FK_answer_question
FOREIGN KEY (question_id) 
REFERENCES question(id);

ALTER TABLE played
ADD CONSTRAINT FK_played_user
FOREIGN KEY (user_id) 
REFERENCES Users(id);

ALTER TABLE played
ADD CONSTRAINT FK_played_quizz
FOREIGN KEY (quizz_id) 
REFERENCES quizz(id);

ALTER TABLE played
ADD CONSTRAINT FK_played_question
FOREIGN KEY (question_id) 
REFERENCES question(id);

ALTER TABLE to_answer
ADD CONSTRAINT FK_to_answer_answer
FOREIGN KEY (answer_id) 
REFERENCES answer(id);

ALTER TABLE to_answer
ADD CONSTRAINT FK_to_answer_played
FOREIGN KEY (played_id) 
REFERENCES played(id);

ALTER TABLE to_qualify
ADD CONSTRAINT FK_to_qualify_category
FOREIGN KEY (category_id) 
REFERENCES category(id);

ALTER TABLE to_qualify
ADD CONSTRAINT FK_to_qualify_quizz
FOREIGN KEY (quizz_id) 
REFERENCES quizz(id);

ALTER TABLE to_contain
ADD CONSTRAINT FK_to_contain_question
FOREIGN KEY (question_id) 
REFERENCES question(id);

ALTER TABLE to_contain
ADD CONSTRAINT FK_to_contain_quizz
FOREIGN KEY (quizz_id) 
REFERENCES quizz(id);
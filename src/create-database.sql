-- use this file to create database
CREATE DATABASE IF NOT EXISTS sportify;
use sportify;

-- create table "clients_infos"
CREATE TABLE IF NOT EXISTS clients_infos (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    mail VARCHAR(50)
);

-- create table "clients_credentials"
CREATE TABLE IF NOT EXISTS clients_credentials (
    id INT NOT NULL PRIMARY KEY,
    mail VARCHAR(50),
    client_password VARCHAR(60),
    FOREIGN KEY (id) REFERENCES clients_infos(id)
);

-- create table "courses"
CREATE TABLE IF NOT EXISTS courses (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50),
    coach VARCHAR(50), 
    duration TIME,
    has_levels BOOLEAN,
    nb_places_remaining INT
);
-- fill table "courses"
INSERT INTO courses(title, coach, duration, has_levels, nb_places_remaining) 
VALUES 
("Yoga", "Michelle Legrand", "1:00:00", TRUE, 5),
("Pilates", "Marion May", "1:00:00", TRUE, 3),
("Renforcement musculaire", "Camille Lemont", "0:45:00", FALSE, 5),
("Cycling", "Amy Taylor", "0:45:00", FALSE, 3),
("Fitness", "Laura Jones", "0:45:00", FALSE, 5),
("Programme personnalisé", "Laura Marins", NULL, FALSE, 5);

-- create table "registrations"
CREATE TABLE IF NOT EXISTS registrations (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    client_id INT NOT NULL,
    course_id INT NOT NULL,
    course_level VARCHAR(50),
    date DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (client_id) REFERENCES clients_infos(id),
    FOREIGN KEY (course_id) REFERENCES courses(id)
);

-- update the number of places remaining
DELIMITER $$

CREATE TRIGGER decrement_nb_places
AFTER INSERT ON registrations
FOR EACH ROW
BEGIN
    UPDATE courses
    SET nb_places_remaining = nb_places_remaining - 1
    WHERE id = NEW.course_id;
END$$

DELIMITER ;
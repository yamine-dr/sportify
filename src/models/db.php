<?php

// db connection infos
$host = "localhost";
$login = "root";
$dbPassword = '';
$dbName = "sportify";

try {
    // connect to MySQL
    $MySQLConnection = new PDO("mysql:host=localhost", $login, $dbPassword);
    $MySQLConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    // create db if it doesn't exist
    $statementCreateDb = "CREATE DATABASE IF NOT EXISTS $dbName";
    $MySQLConnection->exec($statementCreateDb);

    $dbConnection = new PDO("mysql:host=$host;dbname=$dbName", $login, $dbPassword);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // create table "clientInfos" in the db "sportify"
    $statementCreateTableInfos = "CREATE TABLE IF NOT EXISTS info_user(
        id INT AUTO_INCREMENT PRIMARY KEY, 
        mail VARCHAR(50),
        nom VARCHAR(50),
        prenom VARCHAR(50)
        )";
    // create table "clientCredentials" in the db "sportify"
    $statementCreateTableCredentials = "CREATE TABLE IF NOT EXISTS clientCredentials(
        mail VARCHAR(50), 
        mdp VARCHAR(60)
        )";
    // create table "registrations" in the db "sportify"
    $statementCreateTableRegistrations = "CREATE TABLE IF NOT EXISTS registrations(
        id INT AUTO_INCREMENT PRIMARY KEY, 
        idClient VARCHAR(50),
        idCourse VARCHAR(50),
        courseLevel VARCHAR(50),
        date DATETIME DEFAULT CURRENT_TIMESTAMP
        )";

    $dbConnection->exec($statementCreateTableInfos);
    $dbConnection->exec($statementCreateTableCredentials);
    $dbConnection->exec($$statementCreateTableRegistrations);

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
} finally {
    $MySQLConnection = NULL;
    $dbConnection = NULL;
}
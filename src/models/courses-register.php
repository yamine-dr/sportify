<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course = htmlspecialchars($_POST["course"]);
    $courseHasLevel = htmlspecialchars($_POST["courseHasLevel"]);
    if ($courseHasLevel): $courseLevel = $_POST["level"];

    
    $host = 'localhost';
    $login = 'root';
    $dbPassword = '';
    $dbName = 'sportify';

    try{
        $connexion = new PDO("mysql:host=$host;dbname=$dbName", $login, $dbPassword);
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        #CREATE DATABASE Registration
        $codeRegistration = "
            CREATE TABLE IF NOT EXISTS registration(
            id INT AUTO_INCREMENT PRIMARY KEY, 
            idClient VARCHAR(50),
            idCourse VARCHAR(50),
            courseLevel VARCHAR(50),
            date DATETIME DEFAULT CURRENT_TIMESTAMP
            )";
        $connexion->exec($codeRegistration);

        if ($courseHasLevel){
            
            $insertion = $connexion->prepare("INSERT INTO registration(idClient , idCourse, courseLevel) VALUES (:idClient, :idCourse, :courseLevel)");
            $insertion->execute(['idClient' => $_SESSION['user']['id'], 'idCourse' => 0, 'courseLevel' => $courseLevel]); 


        }
        else {
            $insertion = $connexion->prepare("INSERT INTO registration(idClient , idCourse) VALUES (:idClient, :idCourse)");
            $insertion->execute(['idClient' => $_SESSION['user']['id'], 'idCourse' => 0, ]); 
  
        }


    }
    catch(PDOException $e){
        echo "Erreur: ".$e->getMessage();
    }
}
// add +1 user in the course selected ($_POST["course"]) in the DB

//header("location: ../../index.php?action=courses-register&registered=success");
//exit();
?>
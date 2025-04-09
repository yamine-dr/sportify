<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userMail = htmlspecialchars($_POST["inputEmail"]);
    $userPassword = htmlspecialchars($_POST["inputPassword"]);
    $userLastName = htmlspecialchars($_POST["inputLastName"]);
    $userFirstName = htmlspecialchars($_POST["inputFirstName"]);

    $host = 'localhost';
    $login = 'root';
    $dbPassword = '';
    $dbName = 'sportify';

    try{ 
        # test if DB already exists
        $connexion = new PDO("mysql:host=localhost", $login, $dbPassword);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Requête pour créer la base de données si elle n'existe pas
        $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
        $connexion->exec($sql);

        $connexion = new PDO("mysql:host=$host;dbname=$dbName", $login, $dbPassword);
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        #echo "Connexion sql reussie\n";
        
        #CREATE DATABASE sportiy
        $codesql1 = "
                    CREATE TABLE IF NOT EXISTS login_user( 
                    mail VARCHAR(50),
                    mdp VARCHAR(50)
                    )";

        $codesql2 = "
                    CREATE TABLE IF NOT EXISTS info_user( 
                    mail VARCHAR(50),
                    nom VARCHAR(50),
                    prenom VARCHAR(50)
                    )";

        $connexion->exec($codesql1);
        $connexion->exec($codesql2);

        #voir si l'email existe deja
        $mail_exist = $connexion->prepare("SELECT COUNT(*) FROM login_user WHERE mail LIKE :mail");
        $mail_exist->execute(['mail' => $userMail]);
        if($mail_exist->fetchColumn() == 0){
            $insertion = $connexion->prepare("INSERT INTO login_user(mail, mdp) VALUES (:mail, :mdp)");
            $insertion->execute(['mail' => $userMail, 'mdp' => $userPassword]);   

            $insertion = $connexion->prepare("INSERT INTO info_user(mail, nom, prenom) VALUES (:mail, :nom, :prenom)");
            $insertion->execute(['mail' => $userMail, 'nom' => $userLastName, 'prenom' => $userFirstName]);  
        }
        else{
            echo "mail existe deja";
        }
            
        
    }
    catch(PDOException $e){
        echo "Erreur: ".$e->getMessage();
    }
    $connexion = null;
    #echo "Connexion fermé";

    //header("Location: ../../index.php");
    exit(); // très important pour arrêter le script après redirection
}
?>
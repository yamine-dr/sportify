<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userMail = htmlspecialchars($_POST["email"]);
    $userPassword = htmlspecialchars($_POST["password"]);

    $host = 'localhost';
    $login = 'root';
    $dbPassword = '';
    $dbName = 'testSportiy';

    try{ # test if DB already exists
        $connexion = new PDO("mysql:host=$host;dbname=$dbName", $login, $dbPassword);
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion sql reussie\n";
        
        # test if email is already in the DB 
        $mail_exist = $connexion->prepare("SELECT COUNT(*) FROM login_user WHERE mail LIKE :mail");
        $mail_exist->execute(['mail' => $userMail]);
        if ($mail_exist->fetchColumn() == 0) {
            echo "Mail inexistant";   
        } else {
            # if mail is in DB, test if the password matches
            $password_true = $connexion->prepare(
                "SELECT COUNT(*) FROM login_user WHERE mail LIKE :mail AND mdp LIKE :mdp"
            );
            $password_true->execute(['mail' => $userMail, 'mdp' => $userPassword]);
            if ($password_true->fetchColumn() == 0) {
                echo "Mot de passe erronée";   
            } else {
                echo "CONNEXION LEGIT";  
            }
        }
        /*INSCRIPTION
        #voir si l'email existe deja
        $mail_exist = $connexion->prepare("SELECT COUNT(*) FROM login_user WHERE mail LIKE :mail");
        $mail_exist->execute(['mail' => $userMail]);
        if($mail_exist->fetchColumn() == 0){
            $insertion = $connexion->prepare("INSERT INTO login_user(mail, mdp) VALUES (:mail, :mdp)");
            $insertion->execute(['mail' => $userMail, 'mdp' => $userPassword]);   
        }
        else{
            echo "mail existe deja";
        }
            
        */    
        /*
            #CREATE DATABASE testSportiy
        $codesql = "
                    CREATE TABLE login_user( 
                        mail VARCHAR(50),
                        mdp VARCHAR(50)
                    )";
        $connexion->exec($codesql);*/
    }
    catch(PDOException $e){
        echo "Erreur: ".$e->getMessage();
    }
    $connexion = null;
    echo "Connexion fermé";
}

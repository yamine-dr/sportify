<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userMail = htmlspecialchars($_POST["inputEmail"]);
    $userPassword = htmlspecialchars($_POST["inputPassword"]);

    $host = 'localhost';
    $login = 'root';
    $dbPassword = '';
    $dbName = 'sportify';

    try{ 
        $connexion = new PDO("mysql:host=localhost", $login, $dbPassword);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        // Requête pour créer la base de données si elle n'existe pas
        $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
        $connexion->exec($sql);

        $connexion = new PDO("mysql:host=$host;dbname=$dbName", $login, $dbPassword);
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        #echo "Connexion sql reussie\n";
        
        #creer une sous table dans sportify
        $codesql = "
                    CREATE TABLE IF NOT EXISTS login_user( 
                        mail VARCHAR(50),
                        mdp VARCHAR(50)
                    )";
        $connexion->exec($codesql);

        # test if email is already in the DB 
        $mail_exist = $connexion->prepare("SELECT COUNT(*) FROM login_user WHERE mail LIKE :mail");
        $mail_exist->execute(['mail' => $userMail]);
        if ($mail_exist->fetchColumn() == 0) {
            header('location: ../../index.php?action=signin&error=mail-error');
            exit();
        } else {
            # if mail is in DB, test if the password matches
            $password_true = $connexion->prepare(
                "SELECT COUNT(*) FROM login_user WHERE mail LIKE :mail AND mdp LIKE :mdp"
            );
            $password_true->execute(['mail' => $userMail, 'mdp' => $userPassword]);
            if ($password_true->fetchColumn() == 0) {
                echo "Mot de passe erronée";   
            } else {
                echo "CONNEXION LEGIT ";
                $_SESSION["user"] = [
                    "mail" => $userMail,
                    "password" => $userPassword,
                ];
                if (isset($_SESSION["user"]["mail"])) {
                    echo "mail: {$_SESSION["user"]["mail"]} - paswd: {$_SESSION["user"]["password"]}";
                };
                header('location: ../../index.php');
                exit();
            }
        }
        /*
        password_hash()
        password_verify
        */
         
        
        
    }
    catch(PDOException $e){
        echo "Erreur: ".$e->getMessage();
    }
    $connexion = null;
    #echo "Connexion fermé";
}
?>

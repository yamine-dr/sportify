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
                        mdp VARCHAR(60)
                    )";
        $connexion->exec($codesql);

        # test if email is already in the DB 
        $mail_exist = $connexion->prepare("SELECT COUNT(*) FROM login_user WHERE mail LIKE :mail");
        $mail_exist->execute(['mail' => $userMail]);
        if ($mail_exist->fetchColumn() == 0) {
            header('location: ../../index.php?action=signin&error=mail-error');
            exit();
        } 
        else {
            # if mail is in DB, test if the password matches
            $passwordRequest = $connexion->prepare(
                "SELECT mdp FROM login_user WHERE mail LIKE :mail "
            );
            $passwordRequest->execute(['mail' => $userMail]);
            $passwordHash = $passwordRequest->fetchColumn();
            if (password_verify($userPassword, $passwordHash)){
                #recuperation de l'id
                $idRequest = $connexion->prepare(
                    "SELECT id FROM login_user WHERE mail LIKE :mail "
                );
                $idRequest->execute(['mail' => $userMail]);
                $userId = $idRequest->fetchColumn();

                $_SESSION["user"] = [
                    "mail" => $userMail,
                    "password" => $userPassword,
                    "id" => $userId,

                ];
                
                header('location: ../../index.php');
                exit();
        } else {
            header('location: ../../index.php?action=signin&error=wrong-password');
            exit();
        }
    }
}
    catch(PDOException $e){
        echo "Erreur: ".$e->getMessage();
    }
    $connexion = null;
    #echo "Connexion fermé";
}
?>

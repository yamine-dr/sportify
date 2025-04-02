<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$mail_user = htmlspecialchars($_POST["inputEmail"]);
$password_user = htmlspecialchars($_POST["inputPassword"]);

$hote = 'localhost';
$login = 'root';
$pass = '';
$nomBd = 'testSportiy';

try{
    $connexion = new PDO("mysql:host=$hote;dbname=$nomBd", $login, $pass); #si la DB est deja crée
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion sql reussie\n";
    
    #voir si l'email existe 
    $mail_exist = $connexion->prepare("SELECT COUNT(*) FROM login_user WHERE mail LIKE :mail");
    $mail_exist->execute(['mail' => $mail_user]);
    if($mail_exist->fetchColumn() == 0){
        echo "Mail inexistant";   
    }
    else{
        #voir si le mdp correspond
        $password_true = $connexion->prepare("SELECT COUNT(*) FROM login_user 
                                                WHERE mail LIKE :mail
                                                AND mdp LIKE :mdp");
        $password_true->execute(['mail' => $mail_user, 'mdp' => $password_user]);
        if($password_true->fetchColumn() == 0){
            echo "Mot de passe erronée";   
        }
        else{
            echo "CONNEXION LEGIT";  
        }
    }
    /*INSCRIPTION
    #voir si l'email existe deja
    $mail_exist = $connexion->prepare("SELECT COUNT(*) FROM login_user WHERE mail LIKE :mail");
    $mail_exist->execute(['mail' => $mail_user]);
    if($mail_exist->fetchColumn() == 0){
        $insertion = $connexion->prepare("INSERT INTO login_user(mail, mdp) VALUES (:mail, :mdp)");
        $insertion->execute(['mail' => $mail_user, 'mdp' => $password_user]);   
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
?>
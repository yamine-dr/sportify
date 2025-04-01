<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$mail = htmlspecialchars($_POST["inputEmail"]);
$password = htmlspecialchars($_POST["inputPassword"]);

$hote = 'localhost';
$login = 'root';
$pass = '';
$nomBd = 'testSportiy';

try{
    $connexion = new PDO("mysql:host=$hote;dbname=$nomBd", $login, $pass);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion reussie";
}
catch(PDOException $e){
    echo "Erreur: ".$e->getMessage();
}
$connexion = null;
echo "Connexion fermé";

}
?>
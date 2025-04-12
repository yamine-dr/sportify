<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure les fichiers de PHPMailer
require "../../phpmailer/PHPMailer.php";
require "../../phpmailer/SMTP.php"; //on config le serv pour pouvoir envoyé des mail
require "../../phpmailer/Exception.php";

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sessionType = htmlspecialchars($_POST["sessionType"]);
    $location = htmlspecialchars($_POST['location']);
    $userNeeds = htmlspecialchars($_POST['userNeeds']);
    $userMail = $_SESSION["user"]["mail"];

    // set price
    $price = 0;
    // $price = ($sessionType === "individuel") ? $price + 30 : $price + 20;
    if ($sessionType === 'individuel') {
        $price += 30;
    } elseif ($sessionType === 'collectif') {
        $price += 20;
    }

    // $price = ($location === "prive") ? $price + 15 : $price;
    if ($location === 'prive') {
        $price += 15;
    } elseif ($sessionType === 'publique') {
        $price += 0;
    }
    
    $phpMailer = new PHPMailer(true);
    try {
        // SMTP settings for Gmail
        $phpMailer->isSMTP();
        $phpMailer->Host = 'smtp.gmail.com';
        $phpMailer->SMTPAuth = true;

        // info of the sender
        $phpMailer->Username = '87projetwebl2@gmail.com'; // mail adresse
        $phpMailer->Password = 'kdfa bqzw zztw npbv';     // mot de passe d’application

        $phpMailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //Utilisation de STARTTLS pour sécuriser la connexion avec le serveur SMTP
        $phpMailer->Port = 587; //numéro de port utilisé pour la connexion SMTP

        // sender of the mail
        $phpMailer->setFrom('87projetwebl2@gmail.com', 'Sportify');
        // receiver of the mail
        $phpMailer->addAddress($userMail);

        // Contenu de l'e-mail
        $phpMailer->isHTML(true); //Permet contenu du mail en HTML
        $phpMailer->Subject = 'Sportify - Estimation du prix du devis'; //objet du mail
        $phpMailer->Body = "
            <p>Bonjour,</p>

            <p>Voici l'estimation de votre séance personnalisée:</p>

            <ul>
                <li><strong>Type de séance :</strong> $sessionType</li>
                <li><strong>Lieu de séance :</strong> $location</li>
                <li><strong>Besoins :</strong> $userNeeds</li>
                <li><strong> Coût estimé :</strong> $price €</li>
                

            </ul>
            <p>Nous vous répondrons rapidement.</p>
            <p>Cordialement,<br>L'équipe Sportify</p>
        ";

        // Envoi
        $phpMailer->send();
        $outcome = "success";
    } catch (Exception $e) {
        $outcome = "error";
    } finally {
        // redirect to quotation.php
        header("location: ../../index.php?action=quotation&outcome={$outcome}");
        exit();
    }
}
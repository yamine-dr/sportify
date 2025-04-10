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
    $format = htmlspecialchars($_POST['type_seance']);
    $location = htmlspecialchars($_POST['lieu_seance']);
    $userNeeds = htmlspecialchars($_POST['besoins_particuliers']);
    $userMail = $_SESSION["user"]['mail'];

    // set price
    $price = 0;
    // $price = ($format === "individuel") ? $price + 30 : $price + 20;
    if ($format === 'individuel') {
        $price += 30;
    } elseif ($format === 'collectif') {
        $price += 20;
    }

    // $price = ($location === "prive") ? $price + 15 : $price;
    if ($location === 'prive') {
        $price += 15;
    } elseif ($format === 'publique') {
        $price += 0;
    }
    
    $phpMailer = new PHPMailer(true);
    try {
        // SMTP settings for Gmail
        $phpMailer->isSMTP();
        $phpMailer->Host = 'smtp.gmail.com';
        $phpMailer->SMTPAuth = true;

        // info pour l'expediteur du mail
        $phpMailer->Username = '87projetwebl2@gmail.com'; // notre adresse Gmail
        $phpMailer->Password = 'kdfa bqzw zztw npbv';     //  mot de passe d’application

        $phpMailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $phpMailer->Port = 587;

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
                <li><strong>Type de séance :</strong> $format</li>
                <li><strong>Lieu de séance :</strong> $location</li>
                <li><strong>Besoins :</strong> $userNeeds</li>
                <li><strong> Coût estimé :</strong> $price €</li>
                

            </ul>
            <p>Nous vous répondrons rapidement.</p>
            <p>Cordialement,<br>L'équipe Sportify</p>
        ";

        // Envoi
        $phpMailer->send();
        $outcome = "succes";
    } catch (Exception $e) {
        $outcome = "error";
    } finally {
        // to redirect to quotation.php
        header("location: ../../index.php?action=quotation&confirmation={$outcome}");
        exit();
    }
}
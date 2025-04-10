<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure les fichiers de PHPMailer
require '../../phpmailer/PHPMailer.php';
require '../../phpmailer/SMTP.php'; //on config le serv pour pouvoir envoyé des mail
require '../../phpmailer/Exception.php';

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") { //on le recup ici avec la méthode post
    $format = $_POST['type_seance']; //on met les info recup dans des variables
    $location = $_POST['lieu_seance'];
    $customerNeeds = $_POST['besoins_particuliers'];
    $email = $_POST['email']; //$_SESSION["user"]['mail'];

    // Calcul du prix de base
    $price = 0;

    //prix en fct du type d la séance
    // $price = ($format === "individuel") ? $price + 30 : $price + 20;
    if($format === 'individuel'){
        $price += 30;
    } elseif ($format === 'collectif'){
        $price += 20;
    }

    // prix en fct du lieu
    if($location === 'prive'){
        $price += 15;
    } elseif ($format === 'publique'){
        $price += 0;
    }
    

    // initialise PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP settings for Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        // info pour l'expediteur du mail 
        $mail->Username = '87projetwebl2@gmail.com';         // notre adresse Gmail
        $mail->Password = 'kdfa bqzw zztw npbv';     //  mot de passe d’application

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Expéditeur et destinataire
        $mail->setFrom('87projetwebl2@gmail.com', 'Sportify');
        $mail->addAddress($email); // destinataire

        // Contenu de l'e-mail
        $mail->isHTML(true); //Permet contenu du mail en HTML
        $mail->Subject = 'Sportify - Estimation du prix du devis'; //objet du mail
        $mail->Body = "
            <p>Bonjour,</p>

            <p>Voici l'estimation de votre séance personnalisée:</p>

            <ul>
                <li><strong>Type de séance :</strong> $format</li>
                <li><strong>Lieu de séance :</strong> $location</li>
                <li><strong>Besoins :</strong> $customerNeeds</li>
                <li><strong> Coût estimé :</strong> $price €</li>
                

            </ul>
            <p>Nous vous répondrons rapidement.</p>
            <p>Cordialement,<br>L'équipe Sportify</p>
        ";

        // Envoi
        $mail->send();
        $confirmationMsg = [
            'type' => 'success',
            'text' => "E-mail envoyé avec succès à $email."
        ];
    } catch (Exception $e) {
        $confirmationMsg = [
            'type' => 'error',
            'text' => "L'envoi de l'e-mail a échoué. Erreur : " . $mail->ErrorInfo
        ];
    } finally {
        // to redirect to quotation.php
        header("location: ../../index.php?action=quotation&confirmation={$confirmationMsg["type"]}");
        exit();
    }
}
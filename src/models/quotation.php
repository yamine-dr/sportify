<?php

namespace App\Models\Quotation;

require_once("src/phpmailer/phpmailer.php");
require_once("src/phpmailer/exception.php");
require_once("src/phpmailer/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class QuotationModel {
    public function sendMail(string $userMail, string $sessionType, string $location, string $userNeeds): bool {
        // set price
        $price = 0;
        if ($sessionType === "collective") {
            $sessionTypeFr = "collective";
            $price += 30;
        } elseif ($sessionType === "individual") {
            $sessionTypeFr = "individuelle";
            $price += 20;
        }
        if ($location === "private") {
            $locationFr = "privé";
            $price += 15;
        } elseif ($sessionType === "public") {
            $locationFr = "public";
            $price += 0;
        }
        
        $phpMailer = new PHPMailer(true);
        // SMTP settings for Gmail
        $phpMailer->isSMTP();
        $phpMailer->Host = 'smtp.gmail.com';
        $phpMailer->SMTPAuth = true;
        // infos of the sender
        $phpMailer->Username = '87projetwebl2@gmail.com';
        $phpMailer->Password = 'kdfa bqzw zztw npbv';
        // encryption to secure the connection with the SMTP server
        $phpMailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        // port used for the SMTP connection
        $phpMailer->Port = 587;
    
        // sender of the mail
        $phpMailer->setFrom('87projetwebl2@gmail.com', 'Sportify');
        // receiver of the mail
        $phpMailer->addAddress($userMail);
    
        // mail content
        $phpMailer->isHTML(true); // to write the mail in HTML
        $phpMailer->Subject = 'Sportify - Devis';
        $phpMailer->Body = "
            <p>Bonjour,</p>
    
            <p>Voici l'estimation de votre séance personnalisée:</p>
    
            <ul>
                <li><strong>Type de séance :</strong> {$sessionTypeFr}</li>
                <li><strong>Lieu de la séance :</strong> {$locationFr}</li>
                <li><strong>Besoins :</strong> {$userNeeds}</li>
                <li><strong> Coût estimé :</strong> {$price} €</li>
            </ul>
    
            <p>Nous vous répondrons rapidement.</p>
            <p>Cordialement,<br>L'équipe Sportify</p>
        ";
    
        // send the mail
        $isMailSent = $phpMailer->send();
        if (!$isMailSent) {
            return false; // mail sending failed
            throw new Exception($phpMailer->ErrorInfo);
        } else {
            return true; // mail sending succeeded
        }
    }
}

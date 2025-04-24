<?php

namespace App\Models\Contact;

require_once("src/phpmailer/phpmailer.php");
require_once("src/phpmailer/exception.php");
require_once("src/phpmailer/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactModel {
    public function submit(string $firstname, string $lastname, string $message) {
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
        $phpMailer->setFrom('87projetwebl2@gmail.com', 'Sportify - Formulaire de contact');
        // receiver of the mail
        $phpMailer->addAddress('87projetwebl2@gmail.com');
        
        // write the mail in HTML
        $phpMailer->isHTML(true);
        // mail content
        $phpMailer->Subject = "Nouveau message de {$firstname} {$lastname}";
        $phpMailer->Body = "
            <p>Prénom : <strong>{$firstname}</strong></p>
            <p>Nom : <strong>{$lastname}</strong></p>
            <p>Message :<br> <strong>{$message}</strong></p>
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
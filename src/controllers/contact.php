<?php

namespace App\Controllers\Contact;

require_once("src/models/contact.php");

use App\Models\Contact\ContactModel;

class Contact {
    public function display(bool $isClientConnected): void {
        require_once("templates/contact.php");
    }

    public function submitForm(bool $isClientConnected, array $formInputs): void {
        $firstname = htmlspecialchars($formInputs["firstname"]);
        $lastname = htmlspecialchars($formInputs["lastname"]);
        $message = htmlspecialchars($formInputs["message"]);

        $isSubmitted = (new ContactModel())->submit($firstname, $lastname, $message);
        if (!$isSubmitted) {
            // sending failed
            header("location: index.php?action=contact&outcome=error");
            exit();
        }
        // sending succeeded
        header("location: index.php?action=contact&outcome=success");
        exit();
    }
}
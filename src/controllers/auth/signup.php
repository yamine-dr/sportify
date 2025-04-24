<?php

namespace App\Controllers\Auth\Signup;

require_once("src/models/clients.php");

use App\Models\Clients\ClientsRepository;

class Signup {
    public function display(): void {
        require_once("templates/auth/signup.php");
    }

    public function submitForm(array $formInputs): void {
        $firstname = htmlspecialchars($formInputs["firstname"]);
        $lastname = htmlspecialchars($formInputs["lastname"]);
        $mail = htmlspecialchars($formInputs["mail"]);
        $password = htmlspecialchars($formInputs["password"]);

        $isClientRegistered = (new ClientsRepository())->clientRegistration($firstname, $lastname, $mail, $password);
        if (!$isClientRegistered) {
            // signup failed
            header("location: index.php?action=signup&outcome=error");
            exit();
        }
        // signup succeeded
        header("location: index.php?action=signup&outcome=success");
        exit();
    }
}
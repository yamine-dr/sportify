<?php

namespace App\Controllers\Auth\Signin;

require_once("src/models/clients.php");

use App\Models\Clients\ClientsRepository;

class Signin {
    public function display(bool $isConnected): void {
        require_once("templates/auth/signin.php");
    }

    public function signin(array $formInputs): void {
        $mail = htmlspecialchars($formInputs["mail"]);
        $password = htmlspecialchars($formInputs["password"]);

        $isClientConnected = (new ClientsRepository())->clientConnection($mail, $password);
        if (!$isClientConnected) {
            // connection failed
            header("location: index.php?action=signin&outcome=error");
            exit();
        }
        // connection succeeded
        header("location: index.php?action=signin&outcome=success");
        exit();
    }
}
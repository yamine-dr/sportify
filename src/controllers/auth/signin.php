<?php

namespace App\Controllers\Auth\Signin;

class Signin {
    public function execute(): void {
        require_once("templates/auth/signin.php");
    }
}
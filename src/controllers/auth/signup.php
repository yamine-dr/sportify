<?php

namespace App\Controllers\Auth\Signup;

class Signup {
    public function execute(): void {
        require_once("templates/auth/signup.php");
    }
}
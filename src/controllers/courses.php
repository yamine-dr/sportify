<?php

namespace App\Controllers\Courses;

class Courses {
    public function execute(bool $isConnected, array $courses): void {
        $signinBtn = '<p class="mb-3 small text-muted">Connectez vous d\'abord pour vous inscrire</p>' . 
                     '<a href="index.php?action=signin" class="btn btn-primary" role="button">Connexion</a>';

        require_once("templates/courses.php");
    } 
}
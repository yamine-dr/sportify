<?php

namespace App\Controllers\Courses;

class Courses {
    public function execute(bool $isConnected): void {
        $signinBtn = '<p class="mb-3 small text-muted">Connectez vous d\'abord pour vous inscrire</p>' . 
                     '<a href="index.php?action=signin" class="btn btn-primary" role="button">Connexion</a>';

        $courses = [
            [
                "title" => "Yoga",
                "coach" => "Michelle Legrand",
                "duration" => "1 h",
                "places" => "5",
            ],
            [
                "title" => "Pilates",
                "coach" => " Marion May",
                "duration" => "1 h",
                "places" => "3",
            ],
            [
                "title" => "Renforcement musculaire",
                "coach" => "Camille Lemont",
                "duration" => "45 min",
                "places" => "5",
            ],
            [
                "title" => "Cycling",
                "coach" => " Amy Taylor",
                "duration" => "45 min",
                "places" => "3",
            ],
            [
                "title" => "Fitness",
                "coach" => "Laura Jones",
                "duration" => "45 min",
                "places" => "5",
            ],
            [
                "title" => "Programme personnalisé",
                "coach" => "Laura Marins",
                "duration" => "variable",
                "places" => "5",
            ],
        ];

        require_once("templates/courses.php");
    } 
}
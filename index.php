<?php

session_start();

require_once("src/controllers/homepage.php");
require_once("src/controllers/auth/signin.php");
require_once("src/controllers/auth/signup.php");
require_once("src/controllers/quotation.php");
require_once("src/controllers/courses.php");
require_once("src/controllers/courses-register.php");
require_once("src/controllers/contact.php");

use App\Controllers\Homepage\Homepage;
use App\Controllers\Auth\Signin\Signin;
use App\Controllers\Auth\Signup\Signup;
use App\Controllers\Quotation\Quotation;
use App\Controllers\Courses\Courses;
use App\Controllers\CoursesRegister\CoursesRegister;
use App\Controllers\Contact\Contact;

try {
    $isConnected = isset($_SESSION["user"]);

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

    if (isset($_GET["action"]) && $_GET["action"] !== "") {
        if ($_GET["action"] == "signin") {
            (new Signin())->execute($isConnected);
        } elseif ($_GET["action"] == "signup") {
            (new Signup())->execute($isConnected);
        } elseif ($_GET["action"] == "quotation") {
            (new Quotation())->execute($isConnected);
        } elseif ($_GET["action"] == "courses") {
            (new Courses())->execute($isConnected, $courses);
        } elseif ($_GET["action"] == "courses-register") {
            (new CoursesRegister())->execute($isConnected, $courses);
        } elseif ($_GET["action"] == "contact") {
            (new Contact())->execute($isConnected);
        }
    } else {
        (new Homepage())->execute($isConnected);
    }
} catch (Exception $error) {
    die("Erreur : " . $error->getMessage());
}
<?php

session_start();

require_once("src/controllers/homepage.php");
require_once("src/controllers/auth/signup.php");
require_once("src/controllers/auth/signin.php");
require_once("src/controllers/courses.php");
require_once("src/controllers/course-registration.php");
require_once("src/controllers/quotation.php");
require_once("src/controllers/contact.php");

use App\Controllers\Homepage\Homepage;
use App\Controllers\Auth\Signup\Signup;
use App\Controllers\Auth\Signin\Signin;
use App\Controllers\Courses\Courses;
use App\Controllers\CourseRegistration\CourseRegistration;
use App\Controllers\Quotation\Quotation;
use App\Controllers\Contact\Contact;

try {
    $isClientConnected = isset($_SESSION["client"]);

    if (isset($_GET["action"]) && $_GET["action"] !== "") {
        $action = htmlspecialchars($_GET["action"]);
        $formCompleted = (isset($_GET["form"]) && $_GET["form"] === "completed");

        switch ($action) {
            case "signup":
                if ($formCompleted) {
                    (new Signup())->signup($_POST);
                } elseif (!$isClientConnected || isset($_GET["outcome"])) {
                    (new Signup())->display();
                }
                break;
            
            case "signin":
                if ($formCompleted) {
                    (new Signin())->signin($_POST);
                } elseif (!$isClientConnected || isset($_GET["outcome"])) {
                    (new Signin())->display();
                }
                break;
            
            case "courses":
                (new Courses())->display($isClientConnected);
                break;
            
            case "course-registration":
                if ($formCompleted) {
                    (new CourseRegistration())->register($_POST);
                } elseif ($isClientConnected) {
                    (new CourseRegistration())->display();
                }
                break;
            
            case "quotation":
                (new Quotation())->display($isClientConnected);
                break;
            
            case "contact":
                (new Contact())->display($isClientConnected);
                break;
            
            default:
                throw new Exception("Erreur 404 : la page que vous recherchez n'existe pas");
                break;
        }
    } else {
        (new Homepage())->display($isClientConnected);
    }
} catch (Exception $error) {
    die(    $error->getMessage());
}
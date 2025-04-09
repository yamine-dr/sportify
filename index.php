<?php

session_start();

if (isset($_SESSION["user"])) {
    echo "connected";
}

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
    if (isset($_GET["action"]) && $_GET["action"] !== "") {
        if ($_GET["action"] == "signin") {
            (new Signin())->execute();
        } elseif ($_GET["action"] == "signup") {
            (new Signup())->execute();
        } elseif ($_GET["action"] == "quotation") {
            (new Quotation())->execute();
        } elseif ($_GET["action"] == "courses") {
            (new Courses())->execute();
        } elseif ($_GET["action"] == "courses-register") {
            (new CoursesRegister())->execute();
        } elseif ($_GET["action"] == "contact") {
            (new Contact())->execute();
        }
    } else {
        (new Homepage())->execute();
    }
} catch (Exception $error) {
    die("Erreur : " . $error->getMessage());
}
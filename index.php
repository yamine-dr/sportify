<?php

require_once("src/controllers/homepage.php");
require_once("src/controllers/auth/signin.php");
require_once("src/controllers/auth/signup.php");
require_once("src/controllers/quotation.php");

use App\Controllers\Homepage\Homepage;
use App\Controllers\Auth\Signin\Signin;
use App\Controllers\Auth\Signup\Signup;
use App\Controllers\Quotation\Quotation;

try {
    if (isset($_GET["action"]) && $_GET["action"] !== "") {
        if ($_GET["action"] == "signin") {
            (new Signin())->execute();
        } elseif ($_GET["action"] == "signup") {
            (new Signup())->execute();
        } elseif ($_GET["action"] == "quotation") {
            (new Quotation())->execute();
        }
    } else {
        (new Homepage())->execute();
    }
} catch (Exception $error) {
    die("Erreur : " . $error->getMessage());
}
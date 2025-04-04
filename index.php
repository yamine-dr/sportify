<?php

require_once("src/controllers/homepage.php");

use App\Controllers\Homepage\Homepage;

try {
    (new Homepage())->execute();
} catch (Exception $error) {
    die("Erreur : " . $error->getMessage());
}
<?php

namespace App\Controllers\CoursesRegister;

class CoursesRegister {
    public function execute(bool $isConnected): void {
        $course = str_replace('-', ' ', htmlspecialchars($_GET["course"]));
        $coursesWithLevel = ["yoga", "pilates"];
        $courseHasLevel = in_array($course, $coursesWithLevel);

        if ($isConnected && $course !== "programme personnalisé") {
            require_once("templates/courses-register.php");
        } else {
            header("location: index.php?action=courses");
            exit();
        }
    } 
}
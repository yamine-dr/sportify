<?php

namespace App\Controllers\CoursesRegister;

class CoursesRegister {
    public function execute(): void {
        $isConnected = true;

        $course = str_replace('-', ' ', htmlspecialchars($_GET["course"]));
        $coursesWithLevel = ["yoga", "pilates"];
        $courseHasLevel = in_array($course, $coursesWithLevel);

        if ($isConnected && $course !== "programme personnalisé") {
            require_once("templates/courses-register.php");
        } else {
            require_once("templates/courses.php");
        }
    } 
}
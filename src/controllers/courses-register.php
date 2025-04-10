<?php

namespace App\Controllers\CoursesRegister;

class CoursesRegister {
    public function execute(bool $isConnected, array $courses): void {
        // course selected
        $course = str_replace('-', ' ', htmlspecialchars($_GET["course"]));
        $coursesWithLevel = ["yoga", "pilates"];
        $courseHasLevel = in_array($course, $coursesWithLevel);

        $coursesTitles = [];
        foreach ($courses as ["title" => $title]) {
            $coursesTitles[] = strtolower($title);
        }

        if (
            (
                $isConnected 
                && in_array($course, $coursesTitles) 
                && $course !== "programme personnalisé"
            ) || isset($_GET["registered"])
        ) {
            require_once("templates/courses-register.php");
        } else {
            header("location: index.php?action=courses");
            exit();
        }
    } 
}
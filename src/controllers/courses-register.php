<?php

namespace App\Controllers\CoursesRegister;

class CoursesRegister {
    public function execute(): void {
        $isConnected = true;

        if ($isConnected) {
            require_once("templates/courses-register.php");
        } else {
            require_once("templates/courses.php");
        }
    } 
}
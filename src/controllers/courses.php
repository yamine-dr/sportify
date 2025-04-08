<?php

namespace App\Controllers\Courses;

class Courses {
    public function execute(): void {
        $isConnected = true;

        require_once("templates/courses.php");
    } 
}
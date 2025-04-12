<?php

namespace App\Controllers\Courses;

class Courses {
    public function display(bool $isConnected, array $courses): void {
        require_once("templates/courses.php");
    } 
}
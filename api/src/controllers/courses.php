<?php

namespace App\Controllers\Courses;

require_once("src/models/courses.php");

use App\Models\Courses\CoursesRepository;

class Courses {
    public function display(bool $isConnected): void {
        $courses = (new CoursesRepository())->getCourses();

        require_once("templates/courses.php");
    } 
}
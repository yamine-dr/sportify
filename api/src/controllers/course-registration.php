<?php

namespace App\Controllers\CourseRegistration;

require_once("src/models/courses.php");

use App\Models\Courses\CoursesRepository;

class CourseRegistration {
    public function display(): void {
        // course selected
        $course = (new CoursesRepository())->getCourse(str_replace('-', ' ', htmlspecialchars($_GET["course"])));
        require_once("templates/course-registration.php");
    }

    public function submitForm(array $formInputs): void {
        $courseTitle = htmlspecialchars($formInputs["course"]);
        $courseLevel = htmlspecialchars($formInputs["courseHasLevel"]) ? $formInputs["level"] : '';
        
        $isClientRegistered = (new CoursesRepository())->courseRegistration($courseTitle, $courseLevel);
        if (!$isClientRegistered) {
            // registration failed
            header("location: index.php?action=course-registration&course={$courseTitle}&outcome=error");
            exit();
        }
        // registration succeeded
        header("location: index.php?action=course-registration&course={$courseTitle}&outcome=success");
        exit();
    }
}
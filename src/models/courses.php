<?php

namespace App\Models\Courses;

require_once("src/lib/mysql.php");

use App\Lib\MySQL\Database;

class CoursesRepository {
    private ?\PDO $dbConnection;

    function __construct() {
        $this->dbConnection = (new Database("sportify"))->getConnection();
    }

    public function getCourse(string $title): array {
        $courses = $this->getCourses();
        foreach ($courses as $course) {
            if ($course["title"] === $title) return $course;
        }
        return NULL;
    }

    public function getCourses(): array {
        $statementGetCourses = $this->dbConnection->prepare(
            "SELECT id, title, coach, DATE_FORMAT(duration, '%k h %i min') as duration_format, nb_places_remaining, has_levels
            FROM courses"
        );
        $statementGetCourses->execute();

        $courses = [];
        $i = 0;
        while ($row = $statementGetCourses->fetch()) {
            $courses[] = [
                "id" => $row["id"],
                "title" => $row["title"],
                "coach" => $row["coach"],
                "duration" => ($row["duration_format"] !== NULL) ? formatDuration($row["duration_format"]) : '',
                "nbPlacesRemaining" => $row["nb_places_remaining"],
                "hasLevels" => $row["has_levels"],
            ];
            $i++;
        };

        return $courses;
    }

    public function courseRegistration(string $courseTitle, string $level): bool {
        $course = $this->getCourse($courseTitle);
        
        $statementInsertRegistration = $this->dbConnection->prepare(
            "INSERT INTO registrations(client_id, course_id, course_level)
            VALUES (:client_id, :course_id, :course_level)"
        );
        $registrationSucceeded = $statementInsertRegistration->execute([
            "client_id" => $_SESSION["client"]["id"],
            "course_id" => $course["id"],
            "course_level" => $level,
        ]);

        return $registrationSucceeded;
    }
}

function formatDuration(string $time): string {
    if ($time[0] === "0") {
        return "{$time[4]}{$time[5]} min";
    }
    return "{$time[0]} h";
}

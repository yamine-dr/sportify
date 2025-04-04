<?php

namespace App\Controllers\Homepage;

class Homepage {
    public function execute(): void {
        require_once("templates/homepage.php");
    }
}
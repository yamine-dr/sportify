<?php

namespace App\Controllers\Homepage;

class Homepage {
    public function execute(bool $isConnected): void {
        require_once("templates/homepage.php");
    }
}
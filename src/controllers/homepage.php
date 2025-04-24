<?php

namespace App\Controllers\Homepage;

class Homepage {
    public function display(bool $isConnected): void {
        require_once("templates/homepage.php");
    }
}
<?php

namespace App\Controllers\Quotation;

class Quotation {
    public function execute(bool $isConnected): void {
        if ($isConnected) {
            require_once("templates/quotation.php");
        } else {
            header("location: index.php");
            exit();
        }
    }
}
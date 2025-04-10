<?php

namespace App\Controllers\Contact;

class Contact {
    public function execute(bool $isConnected): void {
        require_once("templates/contact.php");
    }
}
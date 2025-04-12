<?php

namespace App\Controllers\Contact;

class Contact {
    public function display(bool $isConnected): void {
        require_once("templates/contact.php");
    }
}
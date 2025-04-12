<?php

namespace App\Controllers\Quotation;

require_once("src/models/quotation.php");

use App\Models\Quotation\QuotationModel;

class Quotation {
    public function display(): void {
        require_once("templates/quotation.php");
    }

    public function submitForm(array $formInputs) {
        $mail = $_SESSION["client"]["mail"];
        $sessionType = htmlspecialchars($formInputs["session-type"]);
        $location = htmlspecialchars($formInputs["location"]);
        $userNeeds = htmlspecialchars($formInputs["user-needs"]);

        $isSent = (new QuotationModel())->sendMail($mail, $sessionType, $location, $userNeeds);
        if (!$isSent) {
            // sending failed
            header("location: index.php?action=quotation&outcome=error");
            exit();
        }
        // sending succeeded
        header("location: index.php?action=quotation&outcome=success");
        exit();
    }
}
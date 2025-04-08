<?php $title = "Titre de la page"; ?>

<?php ob_start(); ?>





<?php $content = ob_get_clean(); ?>

<? require_once("templates/layout/layout.php"); ?>

<?php $title = "Sportify - cours"; ?>

<?php ob_start(); ?>
    <main id="courses">
        <h1>Cours</h1>
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout.php"); ?>
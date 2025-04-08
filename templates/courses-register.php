<?php $title = "Sportify - s'inscrire"; ?>

<?php ob_start(); ?>
    <main id="coursesRegister" class="mt-5">
        <h1 class="text-center">Inscription : <?= $_GET["course"] ?></h1>
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>
<?php
    $bootstrapCSSLink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
        === 'on' ? "https" : "http") . "://" . 
        $_SERVER['HTTP_HOST'] . "/sportify/styles/bootstrap.css";
        
    $stylesCSSLink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
        === 'on' ? "https" : "http") . "://" . 
        $_SERVER['HTTP_HOST'] . "/sportify/styles/styles.css";
        
    $bootstrapJSLink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
        === 'on' ? "https" : "http") . "://" . 
        $_SERVER['HTTP_HOST'] . "/sportify/styles/bootstrap.js";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= $bootstrapCSSLink ?>">
    <link rel="stylesheet" href="<?= $stylesCSSLink ?>">
</head>
<body>
    <header>
        <nav id="nav" class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Sportify</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                        <a class="nav-link" href="templates/portail.php">Inscription/Connexion</a>
                        <a class="nav-link" href="#">Ateliers</a>
                        <a class="nav-link" href="#">Contacts</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <?= $content ?>

    <script src="<?= $bootstrapJSLink ?>"></script>
</body>
</html>
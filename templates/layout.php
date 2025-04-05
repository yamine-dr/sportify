<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php require_once("templates/header.php") ?>
    
    <?= $content ?>

    <!-- add footer here -->

    <script src="scripts/bootstrap.js"></script>
    <script src="scripts/script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/bootstrap.css">
    <link rel="stylesheet" href="assets/styles/styles.css">
</head>

<body>
    <?php require_once("templates/layout/header.php"); ?>
    
    <?= $content ?>
    
    <?php require_once("templates/layout/footer.php"); ?>

    <script src="assets/scripts/bootstrap.bundle.js"></script>
    <script src="assets/scripts/script.js"></script>
</body>
</html>
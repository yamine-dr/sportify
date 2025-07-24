<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <meta name="description" content="Site web de Sportify, salle de sport fictive à Limoges">
  <meta name="author" content="Yamine Daroueche">
  <?php
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $baseUrl = $protocol . '://' . $_SERVER['HTTP_HOST'] . '/sportify';
  ?>
  <meta rel="icon" type="image/svg+xml" href="<?= $baseUrl ?>/favicon.svg">
  <!-- Open Graph -->
  <meta property="og:image" content="<?= $baseUrl ?>/assets/images/og-image.png" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image:width" content="1280" />
  <meta property="og:image:height" content="675" />
  <meta property="og:image:alt" content="Capture d'écran du site web de Sportify" />
  <!-- stylesheets -->
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
<?php
require_once("templates/ui/text.php");
?>

<footer id="footer" class="mt-4 px-3 py-4 d-flex-between max-md:d-flex-col-reverse gap-3 fs-5 border-top border-2">
    <p class="m-0 p-2 text-body-secondary">
      &copy;
      <a
        href="https://yaminedaroueche.com/portfolio"
        target="_blank"
        rel="noopener noreferrer"
        class="text-body-secondary"
      >Yamine Daroueche</a>
      <?= date('Y') ?>
    </p>

    <a
      id="footer-logo"
      href="index.php"
      class="m-0 px-2 d-flex-center gap-2 fs-4 fw-bold text-body text-decoration-none"
      aria-label="Sportify"
    >
      <img
        src="assets/images/logo.png"
        alt="logo de Sportify"
        width="30"
        class="d-inline-block align-text-top"
      >
      Sportify
    </a>

    <ul class="m-0 nav justify-content-end">
      <?= footerNavListItem("index.php", "Acceuil") ?>
      <?= footerNavListItem("index.php?action=courses", "Cours") ?>
      <?= footerNavListItem("index.php?action=contact", "Contact") ?>
    </ul>
</footer>
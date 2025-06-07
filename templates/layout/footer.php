<?php
function footerNavListItem($url, $innerText) {
  return ("
    <li class=\"nav-item\">
      <a 
        href={$url}
        class=\"nav-link p-2 text-body-secondary hover:text-underline\"
      >{$innerText}</a>
    </li>
  ");
}
?>

<footer id="footer" class="mt-4 px-3 py-4 d-flex-between max-md:d-flex-col ts-max-lg:d-flex-col gap-3 fs-5 ts-max-lg:fs-xl border-top border-2">
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
      class="m-0 px-2 d-flex-center gap-2 fs-4 ts-max-lg:fs-xxl fw-bold text-body text-decoration-none"
      aria-label="Sportify"
    >
      <img
        src="assets/images/logo.png"
        alt="logo de Sportify"
        width="30"
        class="d-inline-block align-text-top ts-max-lg:w-75px"
      >
      Sportify
    </a>

    <ul class="m-0 nav justify-content-end ts-max-lg:gap-5">
      <?= footerNavListItem("index.php", "Acceuil") ?>
      <?= footerNavListItem("index.php?action=courses", "Cours") ?>
      <?= footerNavListItem("index.php?action=contact", "Contact") ?>
    </ul>
</footer>
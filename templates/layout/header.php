<?php 
$isClientConnected = isset($_SESSION["client"]);

require_once("templates/ui/buttons.php");
require_once("templates/ui/text.php");
?>

<header class="position-fixed top-0 z-1 w-100">
  <nav class="navbar navbar-expand-lg py-3 bg-green-400 shadow-sm">
    <div class="container-xxl">
      <!-- Navbar logo -->
      <a
        href="index.php"
        class="navbar-brand m-0 d-flex-center gap-2 text-light fs-1 fw-bold"
      >
        <div class="d-flex-center">
          <img
            src="assets/images/logo.png"
            alt="logo de Sportify"
            width="45"
            class="img-fluid"
          >
        </div>
        Sportify
      </a>

      <!-- theme toggle button -->
      <button
        id="themeToggler"
        type="button"
        class="btn d-none d-lg-inline ms-2 me-auto border-0"
        <?php
          $themeToggleUrl = (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== '') ?
            (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . 
            '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "&theme=toggle"
          :
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) . "?theme=toggle"
        ?>
        onclick="window.location.href='<?= $themeToggleUrl ?>'"
      ></button>

      <!-- navbar menu toggle button -->
      <button
        class="navbar-toggler border-light"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarLinks"
        aria-controls="navbarLinks"
        aria-expanded="false"
        aria-label="Toggle navigation menu"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
          class="text-light"
        >
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>

      <!-- navbar menu -->
      <div id="navbarLinks" class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav max-lg:p-3 d-flex-center gap-4 fs-4">
          <!-- navbar links -->
           <li class="nav-item w-fit">
            <?= headerNavLink("index.php", "Acceuil") ?>
           </li>
           <li class="nav-item w-fit">
            <?= headerNavLink("index.php?action=courses", "Cours") ?>
           </li>
           <li class="nav-item w-fit">
            <?= headerNavLink("index.php?action=contact", "Contact") ?>
           </li>
          <!-- navbar "buttons" -->
          <?php if ($isClientConnected): ?>
            <li class="nav-item">
              <?= $quotationButton ?>
            </li>
            <li class="nav-item">
              <?= $logoutButton ?>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <?= $signupButton ?>
            </li>
            <li class="nav-item">
              <?= $signinButton ?>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
</header>
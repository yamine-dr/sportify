<?php

function button(string $url, string $innerText): string {
  return ("
    <button
      onclick=\"window.location.href='{$url}'\"
      type=\"button\"
      class=\"btn bg-green-200 d-flex-center px-2 h-100 text-light fs-4 fw-bold\"
      style=\"letter-spacing: 1px; --bs-btn-hover-bg: var(--green-200);\"
    >{$innerText}</button>
  ");
}

$signupButton = button("index.php?action=signup", "S'inscrire");
$signinButton = button("index.php?action=signin", "Connexion");
$logoutButton = button("index.php?action=logout", "Déconnexion");
$quotationButton = button("index.php?action=quotation", "Devis");

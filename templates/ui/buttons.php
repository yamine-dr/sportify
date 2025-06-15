<?php

function button(string $url, string $innerText): string {
  return ("
    <button
      onclick=\"window.location.href='{$url}'\"
      type=\"button\"
      class=\"btn btn-cta d-flex-center px-2 h-100 text-light fs-4 fw-bold hover:scale\"
    >{$innerText}</button>
  ");
}

$signupButton = button("index.php?action=signup", "S'inscrire");
$signinButton = button("index.php?action=signin", "Connexion");
$logoutButton = button("index.php?action=logout", "Déconnexion");
$quotationButton = button("index.php?action=quotation", "Devis");

<?php

function anchorButton($url, $innerText) {
  return ("
    <a
      href={$url}
      role=\"button\"
      class=\"btn btn-cta d-flex-center px-2 ts-max-lg:p-3 h-100 text-light fs-4 ts-max-lg:fs-xl fw-bold hover:scale\"
    >{$innerText}</a>
  ");
}

$signupButton = anchorButton("index.php?action=signup", "S'inscrire");
$signinButton = anchorButton("index.php?action=signin", "Connexion");
$logoutButton = anchorButton("index.php?action=logout", "Déconnexion");
$quotationButton = anchorButton("index.php?action=quotation", "Devis");

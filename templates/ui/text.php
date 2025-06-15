<?php

// headings
function h(int $headingLevel, string $innerText): string {
  $heading = "";

  switch ($headingLevel) {
    case 1:
      $heading = "
        <h1 class=\"text-center display-1 fw-900\">
          {$innerText}
        </h1>
      ";
      break;
    
    case 2:
      $heading = "
        <h2 class=\"display-5 fw-bold\">
          {$innerText}
        </h2>
      ";
      break;
    
    case 4:
      $heading = "<h4>{$innerText}</h4>";
      break;
    
    case 5:
      $heading = "<h5>{$innerText}</h5>";
      break;
  }

  return $heading;
}

// links
function headerNavLink(string $url, string $innerText): string {
  return ("
    <a 
      href={$url}
      class=\"mx-3 text-light link-light link-underline-opacity-0 link-underline-opacity-100-hover\"
    >{$innerText}</a>
  ");
}

function footerNavListItem(string $url, string $innerText): string {
  return ("
    <li class=\"nav-item\">
      <a 
        href={$url}
        class=\"mx-3 text-body-secondary link-body-emphasis link-underline-opacity-0 link-underline-opacity-100-hover\"
      >{$innerText}</a>
    </li>
  ");
}
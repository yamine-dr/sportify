/* handling switch between light/dark mode */
function setTheme(theme) {
  localStorage.setItem("theme", theme);
  document.querySelector("body").setAttribute("data-bs-theme", theme);
}

function getTheme() {
  return localStorage.getItem("theme");
}

function toggleTheme() {
  var newTheme = (getTheme() === "dark") ? "light" : "dark";
  setTheme(newTheme);
}

function setThemeToggleIcon() {
  const moonSvg = `
    <svg class="text-light size-25px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
      <path fill-rule="evenodd" d="M17 4c.5523 0 1 .44772 1 1v2h2c.5523 0 1 .44771 1 1 0 .55228-.4477 1-1 1h-2v2c0 .5523-.4477 1-1 1s-1-.4477-1-1V9h-2c-.5523 0-1-.44772-1-1s.4477-1 1-1h2V5c0-.55228.4477-1 1-1Z" clip-rule="evenodd"/>
      <path d="M12.3224 4.68708c.2935-.31028.3575-.77266.1594-1.15098-.1981-.37832-.6146-.5891-1.0368-.52467-1.50847.2302-2.93175.83665-4.12869 1.76276-1.19717.92628-2.12732 2.1411-2.69465 3.52702-.56744 1.38618-.75115 2.89299-.53164 4.37079.2195 1.4776.83393 2.8711 1.77895 4.0436.9448 1.1722 2.18683 2.0826 3.60103 2.6449 1.414.5623 2.9539.7584 4.4683.57 1.5145-.1884 2.9549-.7551 4.1784-1.6475 1.2237-.8924 2.1892-2.0806 2.7972-3.4499.1723-.3879.0809-.8423-.2279-1.1335-.3089-.2911-.7679-.3556-1.145-.1608-.8631.4459-1.8291.6799-2.8118.6791h-.0018c-1.1598.0013-2.2925-.3234-3.2596-.931-.9667-.6074-1.7244-1.4697-2.1856-2.4779-.4611-1.00776-.6079-2.1209-.4243-3.20511.1835-1.08442.6905-2.09837 1.4645-2.91681Z"/>
    </svg>
  `;
  const sunSvg = `
    <svg class="text-light size-25px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
      <path fill-rule="evenodd" d="M13 3a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0V3ZM6.343 4.929A1 1 0 0 0 4.93 6.343l1.414 1.414a1 1 0 0 0 1.414-1.414L6.343 4.929Zm12.728 1.414a1 1 0 0 0-1.414-1.414l-1.414 1.414a1 1 0 0 0 1.414 1.414l1.414-1.414ZM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm-9 4a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H3Zm16 0a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2ZM7.757 17.657a1 1 0 1 0-1.414-1.414l-1.414 1.414a1 1 0 1 0 1.414 1.414l1.414-1.414Zm9.9-1.414a1 1 0 0 0-1.414 1.414l1.414 1.414a1 1 0 0 0 1.414-1.414l-1.414-1.414ZM13 19a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Z" clip-rule="evenodd"/>
    </svg>
  `;
  
  var toggleIcon = document.querySelector("#themeToggler");
  toggleIcon.innerHTML = (getTheme() === "dark") ? sunSvg : moonSvg;
}

// get and set the current theme (light or dark mode)
if (getTheme() === null) {
  var theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? "dark" : "light";
  setTheme(theme);
}
setTheme(getTheme());
setThemeToggleIcon();

// toggle theme when URL contains "theme=toggle", then remove it from the URL
const searchParams = new URLSearchParams(window.location.search);
if (searchParams.get("theme") === "toggle") {
  toggleTheme();
  setThemeToggleIcon();
  window.location.replace("index.php");
}
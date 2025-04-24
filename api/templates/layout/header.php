<?php $isClientConnected = isset($_SESSION["client"]); ?>

<header id="header">
    <nav id="nav" class="navbar navbar-expand-lg fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <img src="assets/images/logo.png" alt="logo de Sportify" width="30" class="d-inline-block align-text-top">
                Sportify
            </a>

            <!-- light/dark mode switch -->
            <div class="form-check form-switch">
                <label id="ligh-switch-label" class="form-check-label" for="light-switch">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M17 4c.5523 0 1 .44772 1 1v2h2c.5523 0 1 .44771 1 1 0 .55228-.4477 1-1 1h-2v2c0 .5523-.4477 1-1 1s-1-.4477-1-1V9h-2c-.5523 0-1-.44772-1-1s.4477-1 1-1h2V5c0-.55228.4477-1 1-1Z" clip-rule="evenodd"/>
                        <path d="M12.3224 4.68708c.2935-.31028.3575-.77266.1594-1.15098-.1981-.37832-.6146-.5891-1.0368-.52467-1.50847.2302-2.93175.83665-4.12869 1.76276-1.19717.92628-2.12732 2.1411-2.69465 3.52702-.56744 1.38618-.75115 2.89299-.53164 4.37079.2195 1.4776.83393 2.8711 1.77895 4.0436.9448 1.1722 2.18683 2.0826 3.60103 2.6449 1.414.5623 2.9539.7584 4.4683.57 1.5145-.1884 2.9549-.7551 4.1784-1.6475 1.2237-.8924 2.1892-2.0806 2.7972-3.4499.1723-.3879.0809-.8423-.2279-1.1335-.3089-.2911-.7679-.3556-1.145-.1608-.8631.4459-1.8291.6799-2.8118.6791h-.0018c-1.1598.0013-2.2925-.3234-3.2596-.931-.9667-.6074-1.7244-1.4697-2.1856-2.4779-.4611-1.00776-.6079-2.1209-.4243-3.20511.1835-1.08442.6905-2.09837 1.4645-2.91681Z"/>
                    </svg>
                </label>
                <input
                class="form-check-input"
                type="checkbox"
                id="light-switch"
                name="light-switch"
                />
            </div>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=courses">Cours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=contact">Contact</a>
                    </li>

                    <?php if ($isClientConnected): ?>
                        <a
                        role="button"
                        href="index.php?action=quotation"
                        class="btn nav-btn cta-btn"
                        >
                            Devis
                        </a>
                        <a
                        role="button"
                        href="index.php?action=logout"
                        class="btn nav-btn cta-btn"
                        >
                            Déconnexion
                        </a>
                    <?php else: ?>    
                        <a
                        role="button"
                        href="index.php?action=signup"
                        class="btn nav-btn cta-btn"
                        >
                            S'inscrire
                        </a>
                        <a
                        role="button"
                        id="navBtnSignin"
                        href="index.php?action=signin"
                        class="btn nav-btn cta-btn"
                        >
                            Connexion
                        </a>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

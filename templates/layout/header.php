<?php $userIsConnected = isset($_SESSION["user"]); ?>

<header id="header">
    <nav id="nav" class="navbar navbar-expand-lg fixed-top bg-body shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Sportify</a>
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
                        <a class="nav-link" href="src/models/create-table-courses.php">Cours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=contact">Contacts</a>
                    </li>

                    <?php if ($userIsConnected): ?>
                        <a
                        role="button"
                        href="index.php?action=quotation"
                        class="btn nav-btn btn-primary rounded-pill d-flex justify-content-center align-items-center"
                        >
                            Devis
                        </a>
                        <a
                        role="button"
                        href="src/models/logout.php"
                        class="btn nav-btn cta-btn rounded-pill link-light d-flex justify-content-center align-items-center"
                        >
                            Déconnexion
                        </a>
                    <?php else: ?>    
                        <a
                        role="button"
                        href="index.php?action=signup"
                        class="btn nav-btn cta-btn rounded-pill link-light d-flex justify-content-center align-items-center"
                        >
                            S'inscrire
                        </a>
                        <a
                        role="button"
                        id="navBtnSignin"
                        href="index.php?action=signin"
                        class="btn nav-btn cta-btn rounded-pill d-flex justify-content-center align-items-center"
                        >
                            Connexion
                        </a>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

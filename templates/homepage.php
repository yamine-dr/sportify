<?php $title = "Sportify"; ?>

<?php ob_start(); ?>
    <main>
        <section id="hero-section">
            <div class="hero-content">
                <h1>Le sport,</br> comme vous l'aimez!</h1>
                <div>
                    <button class="hero-btn">
                        Inscription
                    </button>
                    <button class="hero-btn">
                        Connexion
                    </button>
                </div>
            </div>

            <div id="hero-img-credit">
                <p>Picture by <a href="https://unsplash.com/" target="_blank">someone</a>
            </div>
        </section>
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout.php"); ?>
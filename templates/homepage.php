<?php $title = "Sportify"; ?>

<?php ob_start(); ?>
    <main>
        <section id="hero-section" style="background-image: url('assets/hero-image.jpg');">
            <div class="hero-content">
                <h1>Le sport,</br> comme vous l'aimez!</h1>
                <div>
                    <button class="hero-btn">
                    <a href="index.php?action=signup" class="link-underline link-underline-opacity-0">
                            Inscription
                        </a>
                    </button>
                    <button class="hero-btn">
                        <a href="index.php?action=signin" class="link-underline link-underline-opacity-0">
                            Connexion
                        </a>
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
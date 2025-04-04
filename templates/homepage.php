<?php $title = "Sportify"; ?>

<?php ob_start(); ?>
    <main>
        <section id="hero-section" style="background-image: url('assets/hero-image.jpg');">
            <div class="hero-content">
                <h1>Le sport,</br> comme vous l'aimez!</h1>
                <div>
                    <button class="hero-btn">
                    <a href="index.php?action=signup" class="text-light link-underline link-underline-opacity-0">
                            Inscription
                        </a>
                    </button>
                    <button class="hero-btn">
                        <a href="index.php?action=signin" class="text-light link-underline link-underline-opacity-0">
                            Connexion
                        </a>
                    </button>
                </div>
            </div>

            <div id="hero-img-credit">
                <p>Picture by <a href="https://unsplash.com/" target="_blank">someone</a>
            </div>
        </section>

        <div class="container py-5 d-flex gap-4 border border-3 border-danger">
            <div class="w-50 border border-2">
                <img src="assets/hero-image.jpg" alt="" class="img-fluid rounded-5">
            </div>
            <div class="w-50 border border-2">
                <h2>Description</h2>
                <div>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Quaerat voluptates suscipit in, porro officia eum voluptatibus.
                </div>
            </div>
        </div>
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout.php"); ?>
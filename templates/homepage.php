<?php $title = "Sportify"; ?>

<?php ob_start(); ?>
    <main id="homepage">
        <section id="homepageHeroSection" style="background-image: url('assets/hero-image.jpg');">
            <div class="hero-content">
                <h1>Le sport,</br> comme vous l'aimez!</h1>
                <div class="d-flex gap-3 mt-3">
                    <a
                    role="button"
                    id="navBtn"
                    href="index.php?action=signin"
                    class="btn hero-btn link-light d-flex justify-content-center align-items-center"
                    >
                        Inscription
                    </a>
                    <a
                    role="button"
                    id="navBtn"
                    href="index.php?action=signin"
                    class="btn hero-btn link-light d-flex justify-content-center align-items-center"
                    >
                        Connexion
                    </a>
                </div>
            </div>

            <div id="heroImgCredit">
                <p>Picture by <a href="https://unsplash.com/" target="_blank">someone</a>
            </div>
        </section>

        <section id="homepageDescription" class="container py-5 d-flex gap-4 border border-3 border-danger">
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
        </section>
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout.php"); ?>
<?php $title = "Sportify"; ?>

<?php ob_start(); ?>
    <main id="homepage">
        <!-- HERO SECTION -->
        <section id="homepageHeroSection" style="background-image: url('assets/images/hero.jpg');">
            <div class="hero-content">
                <h1>Le sport,</br> comme vous l'aimez!</h1>
                <a
                role="button"
                id="navBtn"
                href="index.php?action=signin"
                class="btn cta-btn link-light d-flex justify-content-center align-items-center"
                >
                    S'inscrire
                </a>
            </div>

            <div id="heroImgCredit">
                <p>Picture by <a href="https://unsplash.com/" target="_blank">someone</a>
            </div>
        </section>

        <!-- FEATURES SECTION -->
        <section class="container my-5 py-4 py-lg-6">
            <div class="row align-items-center">
                <!-- LEFT COLUMN -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="px-4 border border-3 border-dark">
                        <img class="position-relative img-fluid" src="assets/images/gym1.jpg" alt="" loading="lazy">
                    </div>
                </div>
                <!-- RIGHT COLUMN -->
                <div class="col-lg-6">
                    <div class="mb-5">
                        <h2 class="mb-4 fw-bold display-5">Une salle de sport très bien équipée</h2>
                        <p class="lead text-muted">
                            Chez Sportify, nous utilisons des appareils de musculation derniers cris. 
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Animi placeat libero iste officia ipsa, quia ipsam nobis earum similique.
                        </p>
                    </div>

                    <div class="d-sm-flex mb-4 align-items-center">
                        <div class="d-inline-flex">
                            <div>
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon" class="text-success">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                    <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                </svg>
                            </div>

                            <div class="ms-3 align-self-center">
                                <p>Salle climatisée</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-flex align-items-center mb-4">
                        <div class="d-inline-flex">
                            <div>
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon" class="text-success">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                    <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                </svg>
                            </div>

                            <div class="ms-3 align-self-center">
                                <p>7/7J, 6 h - 22 h</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-flex align-items-center mb-4">
                        <div class="d-inline-flex">
                            <div>
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon" class="text-success">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                    <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                </svg>
                            </div>

                            <div class="ms-3 align-self-center">
                                <p>Point 3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout.php"); ?>
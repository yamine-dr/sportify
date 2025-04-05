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

        <!-- ABOUT SECTION -->
        <section id="about" class="container">
            <div class="row align-items-md-center mb-5">
                <div class="col-md-12">
                    <div class=" text-center">
                        <h3 class="display-2 mt-5 mb-2 fw-bolder">&#193; propos de Sportify</h3>
                        <p> 
                            Le siège social se situe au 87 Avenue Albert Thomas à Limoges.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-md-center mb-5">
                <div class="col-lg-6 pr-5">
                    <div class=" mb-4">
                        <h3>
                            Notre mission :
                            <br>accompagner les limougeauds vers la meilleure forme de leur vie.
                        </h3>
                    </div>
                    <div class="">


                        <div class="row">
                            <div class="col-6">
                                <div class=" mb-4">
                                    <p class=" m-0" style="font-size:40px;">20+</p>
                                    <p class="small text-uppercase">Années d'expériences</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class=" mb-4">
                                    <p class=" m-0" style="font-size:40px;">3</p>
                                    <p class="small text-uppercase">Locations</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class=" mb-4">
                                    <p class=" m-0" style="font-size:40px;">6</p>
                                    <p class="small text-uppercase">Cours</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class=" mb-4">
                                    <p class=" m-0" style="font-size:40px;">500+</p>
                                    <p class="small text-uppercase">Adhérents</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" text-muted">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Nunc et metus id ligula malesuada placerat sit amet quis enim. 
                            Aliquam erat volutpat.&nbsp;
                        </p>
                        <p>
                            In pellentesque scelerisque auctor. Ut porta lacus eget nisi fermentum lobortis. 
                            Vestibulum facilisis tempor ipsum, ut rhoncus magna ultricies laoreet. 
                            Proin vehicula erat eget libero accumsan iaculis.
                        </p>
                    </div>
                </div>
                <!-- About section images -->
                <!-- <div id="aboutSectionImages"> -->
                    <div class="d-none d-md-block col-sm-6 col-lg-3">
                        <div class=" mb-4">
                            <div class="card shadow-sm border-light w-75">
                                <img src="assets/images/homepage-about1.jpg" alt="Un homme agé qui soulève 2 haltères" class="card-img-top" loading="lazy">
                                <div class="card-body">
                                    <h4 class="card-title text-uppercase fs-5">Santé</h4>
                                    <!-- <h5 class="card-subtitle">Card subtitle</h5> -->
                                    <p class="card-text">petit texte à mettre ici</p>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="card shadow-sm border-light w-75">
                                <img src="assets/images/homepage-about2.jpg" alt="Un homme qui sourit dans une salle de sport" class="card-img-top" loading="lazy">
                                <div class="card-body">
                                    <h4 class="card-title text-uppercase fs-5">Plaisir</h4>
                                    <!-- <h5 class="card-subtitle">Card subtitle</h5> -->
                                    <p class="card-text">petit texte à mettre ici</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-md-block col-sm-6 col-lg-3 mt-4 mt-sm-0 align-self-center">
                        <div class="card shadow-sm border-light w-75">
                            <img src="assets/images/homepage-about3.jpg" alt="Un homme en chaise roulante qui fait de la musculation" class="card-img-top" loading="lazy">
                            <div class="card-body">
                                <h4 class="card-title text-uppercase fs-5">Accessibilité</h4>
                                <!-- <h5 class="card-subtitle">Card subtitle</h5> -->
                                <p class="card-text">petit texte à mettre ici</p>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </section>

        <!-- FEATURES SECTION -->
        <section id="features" class="container my-5 py-4 py-lg-6">
            <div class="row align-items-center">
                <!-- LEFT COLUMN -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="px-4 border border-3 border-dark">
                        <img class="position-relative img-fluid" src="assets/images/homepage-features1.jpg" alt="" loading="lazy">
                    </div>
                </div>
                <!-- RIGHT COLUMN -->
                <div class="col-lg-6">
                    <div class="mb-5">
                        <h2 class="mb-4 fw-bold display-5">Une salle de sport bien équipée</h2>
                        <p class="lead text-muted">
                            Chez Sportify, nous utilisons des appareils de musculation derniers cris. 
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

        <!-- add testimonials section -->
        
        <!-- add pricing section -->
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout.php"); ?>
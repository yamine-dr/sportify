<?php $title = "Sportify"; ?>

<?php ob_start(); ?>
    <main id="homepage">
        <!-- HERO SECTION -->
        <section id="homepageHeroSection" class="mb-5" style="background-image: url('assets/images/hero.jpg');">
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
        <section id="about" class="container mb-5">
            <div class="row align-items-md-center mb-5">
                <div class="col-md-12">
                    <div class=" text-center">
                        <h2 class="mb-2 fw-bold display-5">&#193; propos de Sportify</h2>
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
                                    <p class="card-text">petit texte à mettre ici</p>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="card shadow-sm border-light w-75">
                                <img src="assets/images/homepage-about2.jpg" alt="Un homme qui sourit dans une salle de sport" class="card-img-top" loading="lazy">
                                <div class="card-body">
                                    <h4 class="card-title text-uppercase fs-5">Plaisir</h4>
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
                                <p class="card-text">petit texte à mettre ici</p>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </section>

        <!-- FEATURES SECTION -->
        <section id="features" class="container mb-5 py-4 py-lg-6">
            <div class="row align-items-center">
                <!-- LEFT COLUMN -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="px-4 d-flex flex-column align-items-center gap-3">
                        <img class="d-block position-relative img-fluid rounded-3" src="assets/images/homepage-features1.jpg" alt="Une salle de sport avec des tapis de course" loading="lazy">
                        <img class="d-none d-lg-block position-relative img-fluid rounded-3" src="assets/images/homepage-features2.jpg" alt="" loading="lazy">
                    </div>
                </div>
                <!-- RIGHT COLUMN -->
                <div class="col-lg-6">
                    <div class="mb-4 text-center text-lg-start">
                        <h2 class="mb-4 fw-bold display-5">Une salle de sport bien équipée</h2>
                        <p class="lead text-muted">
                            Chez Sportify, nous utilisons des appareils de musculation derniers cris. 
                        </p>
                    </div>

                    <div class="mb-3 d-flex justify-content-center justify-content-lg-start">
                        <div class="d-inline-flex">
                            <div>
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon" class="text-success">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                    <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                </svg>
                            </div>

                            <div class="ms-2 align-self-center">
                                <p>Salles climatisées</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-center justify-content-lg-start">
                        <div class="d-inline-flex">
                            <div>
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon" class="text-success">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                    <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                </svg>
                            </div>

                            <div class="ms-2 align-self-center">
                                <p>Ouverture 7/7J, 6 h - 22 h</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-center justify-content-lg-start">
                        <div class="d-inline-flex">
                            <div>
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon" class="text-success">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                    <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                </svg>
                            </div>

                            <div class="ms-2 align-self-center">
                                <p>Parkings sécurisés</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS SECTION -->
        <section class="container mb-5 py-5">
            <!-- Testimonials section title -->
            <div class="row mb-4">
                <div class="col-md-12 text-center">
                    <div>
                        <h2 class="fw-bold display-5">Validé par nos adhérents</h2>
                        <p>
                            Voilà ce que nos clients disent de nous.
                        </p>
                    </div>
                </div>
            </div>
            <!-- 1st row of testimonials -->
            <div class="row justify-content-center">
                <!-- testimonial card 1 -->
                <div class="col-md-8 col-lg-4">
                    <div class="card border-0 shadow">
                        <div class="card-body py-4">
                            <div class="d-flex">
                                <img src="assets/images/homepage-testimonials1.jpg" alt="" class="testimonial-headshot rounded-2 shadow">
                                <div class="ps-2">
                                    <h4 class="ms-2">Mathew Glock</h4>
                                </div>
                            </div>
                            <div class="mt-4 text-muted">
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="rating mt-3 text-success">
                                <div> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- testimonial card 2 -->
                <div class="col-md-8 col-lg-4 mb-4 mb-4 border border-4 border-danger">
                    <div class="card border-0 shadow">
                        <div class="card-body py-4">
                            <div class="d-flex">
                                <img style="width:48px;height:48px" src="https://images.unsplash.com/photo-1628157588553-5eeea00af15c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NHx8YXZhdGFyfGVufDB8Mnx8fDE2Mzg4OTExNTE&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080" alt="Photo by Leio McLaren" class="rounded-2 shadow" srcset="https://images.unsplash.com/photo-1628157588553-5eeea00af15c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NHx8YXZhdGFyfGVufDB8Mnx8fDE2Mzg4OTExNTE&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080 1080w, https://images.unsplash.com/photo-1628157588553-5eeea00af15c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NHx8YXZhdGFyfGVufDB8Mnx8fDE2Mzg4OTExNTE&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1628157588553-5eeea00af15c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NHx8YXZhdGFyfGVufDB8Mnx8fDE2Mzg4OTExNTE&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1628157588553-5eeea00af15c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NHx8YXZhdGFyfGVufDB8Mnx8fDE2Mzg4OTExNTE&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1628157588553-5eeea00af15c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NHx8YXZhdGFyfGVufDB8Mnx8fDE2Mzg4OTExNTE&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080">
                                <div class="ps-2">
                                    <h4 class="ms-2">Tahmid William&nbsp;<p></p>
                                        <p></p>
                                    </h4>
                                </div>
                            </div>
                            <div class="mt-4 text-muted">
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et metus id ligula malesuada placerat sit amet quis enim. Aliquam erat volutpat.
                                    </p>
                                </div>
                            </div>
                            <div class="rating mt-3 text-success">
                                <div> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-4 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body py-4">
                            <div class="d-flex">
                                <img style="width:48px;height:48px" src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTh8fGZhY2V8ZW58MHwyfHx8MTYzODg5MTA3MA&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080" alt="Photo by Amir Seilsepour" class="rounded-2 shadow" srcset="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTh8fGZhY2V8ZW58MHwyfHx8MTYzODg5MTA3MA&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080 1080w, https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTh8fGZhY2V8ZW58MHwyfHx8MTYzODg5MTA3MA&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTh8fGZhY2V8ZW58MHwyfHx8MTYzODg5MTA3MA&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTh8fGZhY2V8ZW58MHwyfHx8MTYzODg5MTA3MA&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTh8fGZhY2V8ZW58MHwyfHx8MTYzODg5MTA3MA&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080">
                                <div class="ps-2">
                                    <h4 class="ms-2">Jarvis Ridley&nbsp;<p></p>
                                        <p></p>
                                    </h4>
                                </div>
                            </div>
                            <div class="mt-4 text-muted">
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="rating mt-3 text-success">
                                <div>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2nd row of testimonials -->
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-4 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body py-4">
                            <div class="d-flex">
                                <img style="width:48px;height:48px" src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080" alt="Photo by Imansyah Muhamad Putera" class="rounded-2 shadow" srcset="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080 1080w, https://images.unsplash.com/photo-1542909168-82c3e7fdca5c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1542909168-82c3e7fdca5c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1542909168-82c3e7fdca5c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1542909168-82c3e7fdca5c??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MXx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080">
                                <div class="ps-2">
                                    <h4 class="ms-2">Bronwen Baxter&nbsp;<p></p>
                                        <p></p>
                                    </h4>
                                </div>
                            </div>
                            <div class="mt-4 text-muted">
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="rating mt-3 text-success">
                                <div> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-4 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body py-4">
                            <div class="d-flex">
                                <img style="width:48px;height:48px" src="https://images.unsplash.com/photo-1579503841516-e0bd7fca5faa?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NXx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080" alt="Photo by Conor OBrien" class="rounded-2 shadow" srcset="https://images.unsplash.com/photo-1579503841516-e0bd7fca5faa?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NXx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080 1080w, https://images.unsplash.com/photo-1579503841516-e0bd7fca5faa??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NXx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1579503841516-e0bd7fca5faa??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NXx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1579503841516-e0bd7fca5faa??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NXx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1579503841516-e0bd7fca5faa??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8NXx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080">
                                <div class="ps-2">
                                    <h4 class="ms-2">
                                        Nadir Chandler

                                    </h4>
                                </div>
                            </div>
                            <div class="mt-4 text-muted">
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et metus id ligula malesuada placerat sit amet quis enim. Aliquam erat volutpat.
                                    </p>
                                </div>
                            </div>
                            <div class="rating mt-3 text-success">
                                <div> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-4 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-body py-4">
                            <div class="d-flex">
                                <img style="width:48px;height:48px" src="https://images.unsplash.com/photo-1584308972272-9e4e7685e80f?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Nnx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080" alt="Photo by Daniil Lobachev" class="rounded-2 shadow" srcset="https://images.unsplash.com/photo-1584308972272-9e4e7685e80f?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Nnx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080 1080w, https://images.unsplash.com/photo-1584308972272-9e4e7685e80f??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Nnx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=150 150w, https://images.unsplash.com/photo-1584308972272-9e4e7685e80f??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Nnx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=300 300w, https://images.unsplash.com/photo-1584308972272-9e4e7685e80f??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Nnx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=768 768w, https://images.unsplash.com/photo-1584308972272-9e4e7685e80f??crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8Nnx8ZmFjZXxlbnwwfDJ8fHwxNjM4ODkxMDU2&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1024 1024w" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="1080">
                                <div class="ps-2">
                                    <h4 class="ms-2">
                                        Samira Goldsmith

                                    </h4>
                                </div>
                            </div>
                            <div class="mt-4 text-muted">
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="rating mt-3 text-success">
                                <div> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- add pricing section -->
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout.php"); ?>
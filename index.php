<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportify</title>
    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header>
        <nav id="nav" class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Sportify</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                        <a class="nav-link" href="#">Inscription/Connexion</a>
                        <a class="nav-link" href="#">Ateliers</a>
                        <a class="nav-link" href="#">Contacts</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div id="heroSection" class="container-fluid">
            <video autoplay="" id="heroVideo" loop="" muted="" poster="assets/hero-video-poster.jpg">
                <source src="assets/hero-video.mp4" type="video/mp4" />
                <!-- Video downloaded on [Coverr](https://coverr.co) -->
            </video>
            <img id="heroMobliePoster" class="poster img-fluid mx-auto d-block d-sm-none" alt="poster image mobile" src="assets/hero-video-poster.jpg" />
            <div class="d-flex">
                <div class="container d-flex flex-row">
                    <div class="row">
                        <div class="col-lg-12 d-flex flex-column justify-content-center item text-primary py-md-5 text-container">
                            <h1 class="display-4 mb-0 fw-bold">
                                Le sport,
                                <br>comme vous l'aimez.
                            </h1>
                            <p class="lead my-4 fw-semibold">
                                Chez Sportify, les cours sont ouvert à tout le monde.
                            </p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </main>

    <script src="styles/bootstrap.js"></script>
</body>
</html>
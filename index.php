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
        <section id="hero-section">
            <div class="hero-content container">
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

        <section id="about-section" class="container d-md-flex">
            <div id="about-images" class="row row-cols-2 border border-4 border-danger">
                    <div class="col">
                        <img src="assets/gym-img1.jpg" alt="Etage de la salle de sport" id="about-img1" class="img-fluid w-25">
                    </div>
                    <div class="col">
                        <img src="assets/gym-img1.jpg" alt="Etage de la salle de sport" id="about-img1" class="img-fluid w-25">
                    </div>
                    <div class="col">
                        <img src="assets/gym-img1.jpg" alt="Etage de la salle de sport" id="about-img1" class="img-fluid w-25">
                    </div>
                    <div class="col">
                        <img src="assets/gym-img1.jpg" alt="Etage de la salle de sport" id="about-img1" class="img-fluid w-25">
                    </div>
            </div>
            <div id="about-text" class="col border border-4 border-danger">
                <h2>Description</h2>
            </div>
        </section>
    </main>

    <script src="styles/bootstrap.js"></script>
</body>
</html>
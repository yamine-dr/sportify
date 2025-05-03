<?php $title = "Sportify - Contact"; ?>

<?php ob_start(); ?>
    <main id="contact" class="mb-5">
        <h1 class="mb-5 text-center">Contact</h1>

        <section class="container mb-5 d-flex flex-column flex-lg-row gap-3 gap-lg-0 align-items-center">
            <!-- contact infos -->
            <div class="col-lg-6 p-4">
                <div class="mb-5">
                    <h2 class="fw-semibold">Nos coordonnées</h2>
                    <ul>
                        <li>Téléphone : +33 1 23 45 67 89</li>
                        <li>Email : sportify@mail.com</li>
                    </ul>
                </div>
                <div class="mb-5">
                    <h2 class="fw-semibold">Adresses</h2>
                    <ul>
                        <li class="fw-semibold">
                            Salle ouest (siège social) : 87 Avenue Albert Thomas, 87000 Limoges
                        </li>
                        <li>Salle nord : 187 Boulevard Georges Clémenceau, 87100 Limoges</li>
                        <li>Salle sud : 7 Avenue Ernest Ruben, 87000 Limoges</li>
                    </ul>
                </div>
                <div>
                    <h2 class="fw-semibold">Horaires</h2>
                    <div>
                        <h5>Bureau :</h5>
                        <ul>
                            <li>Lundi au vendredi : 7 h - 19 h 30</li>
                            <li>Samedi - dimanche : 11 h - 17 h</li>
                        </ul>
                    </div>
                    <div>
                        <h5>Salles :</h5>
                        <ul>
                            <li>Lundi au dimanche : 7 h - 22 h</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Google Maps integration -->
            <div class="col-9 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <figure class="ratio ratio-16x9 w-100">
                    <iframe class="rounded-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2779.717597457045!2d1.2382112756523123!3d45.83693580849297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fecb48e1bfd867%3A0x9709dcdf86cce109!2s87%20Av.%20Albert%20Thomas%2C%2087100%20Limoges!5e0!3m2!1sfr!2sfr!4v1744221566576!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </figure>
                <figcaption class="small text-muted">Adresse du bureau</figcaption>
            </div>
        </section>

        <!-- FORM SECTION -->
        <section class="container mt-5">
            <?php if (!isset($_GET["outcome"])): // display form if not submitted yet ?>
                <h3 class="mb-4">Contactez-nous</h3>
                <div class="p-4 p-md-5 border rounded-3 bg-body-secondary">
                    <form method="POST" action="index.php?action=contact&form=completed">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="" required>
                            <label for="firstname" class="form-label">Prénom</label>
                        </div>
    
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="" required>
                            <label for="lastname" class="form-label">Nom</label>
                        </div>
    
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="message" id="message" placeholder="" required></textarea>
                            <label for="message" class="form-label">Posez vos questions/commentaires</label>
                        </div>
    
                        <div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </form>
                </div>
                <small class="text-muted">Nous répondons à toutes les questions !</small>
            <?php else: // display outcome if form submitted ?>
                <?php
                    switch (htmlspecialchars($_GET["outcome"])) {
                        case "success": // sending succeeded
                            echo(
                                <<<HTML
                                <div id="outcome" class="alert alert-success fs-4">
                                    Votre message a bien été envoyé. Merci de nous avoir contactés !
                                </div>
                                HTML
                            );
                            break;
                        case "error": // sending failed
                            echo(
                                <<<HTML
                                <div id="outcome" class="alert alert-danger fs-4">
                                    Une erreur est survenue lors de l'envoi, veuillez réessayer plus tard
                                </div>
                                HTML
                            );
                            break;
                    }
                ?>
            <?php endif; ?>
        </section>
    </main>
<?php $content = ob_get_clean(); ?>


<?php require_once("templates/layout/layout.php"); ?>

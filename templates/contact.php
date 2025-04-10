<?php $title = "Sportify - contact"; ?>

<?php ob_start(); ?>
    <main id="contact">
        <h1 class="mb-5 text-center">Contacts</h1>

        <div class="container mb-5 d-flex flex-column flex-lg-row gap-3 gap-lg-0 align-items-center">
            <div class="col-lg-6 p-4">
                <div>
                    <h2 class="fw-semibold">Contacts</h2>
                    <ul>
                        <li>
                            Téléphone : +33 1 23 45 67 89
                        </li>
                        <li>
                            Email : sportify@mail.com
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="fw-semibold">Horaires</h2>
                    <div>
                        <h5>Bureau :</h5>
                        <ul>
                            <li>
                                Lundi au vendredi : 7 h - 19 h 30
                            </li>
                            <li>
                                Samedi - dimanche : 11 h - 17 h
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h5>Salles :</h5>
                        <ul>
                            <li>
                                Lundi au dimanche : 7 h - 22 h
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <h2 class="fw-semibold">Adresses</h2>
                    <ul>
                        <li class="fw-semibold">
                            Salle ouest (siège social) : 87 Avenue Albert Thomas, 87000 Limoges
                        </li>
                        <li>
                            Salle nord : 187 Boulevard Georges Clémenceau, 87100 Limoges
                        </li>
                        <li>
                            Salle sud : 7 Avenue Ernest Ruben, 87000 Limoges
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Google Maps integration -->
            <div class="col-9 col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <figure class="ratio ratio-16x9 w-100">
                    <iframe class="rounded-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2779.717597457045!2d1.2382112756523123!3d45.83693580849297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fecb48e1bfd867%3A0x9709dcdf86cce109!2s87%20Av.%20Albert%20Thomas%2C%2087100%20Limoges!5e0!3m2!1sfr!2sfr!4v1744221566576!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </figure>
                <figcaption class="small text-muted">Adresse du bureau</figcaption>
            </div>
        </div>

        <!-- form group -->
        <div class="container mb-5 p-4 p-md-5 border rounded-3 bg-light">
            <h3 class="mb-3 display-6 fw-medium">Contactez-nous</h3>
            <form method="POST" action="">
                <div class="d-flex justify-content-between gap-4">
                    <div class="mb-3 w-100">
                        <label for="name" class="form-label ms-1">Nom et prénom</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="" required>
                    </div>
                    <div class="mb-3 w-100">
                        <label for="email" class="form-label ms-1">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="jaime@sportify.com" required>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="textarea" class="form-label ms-1">Commentaire</label>
                    <textarea class="form-control" placeholder="Laissez-nous un commentaire" id="textarea"></textarea>
                </div>
                <button class="btn btn-primary w-25 rounded-3" type="submit">Envoyer</button>
            </form>

            <small class="text-muted">Nous répondons à toutes les questions !</small>
        </div>

        <!-- Formulaire de contact de Ryad -->
        <form action="traitement.php" method="POST" class="mb-5 border p-4 rounded shadow-sm"> <!--envoie les données a "traitement.php" avec POST -->
            <h1 class="mb-4">Espace questions</h1>
            <div class="mb-3">
                <!-- Label avec classe Bootstrap -->
                <label for="espaceQuestions" class="form-label">Espace questions :</label>
                <!-- style du textarea -->
                <textarea class="form-control" name="espace_questions" id="espaceQuestions" rows="6" placeholder="Posez ici toutes vos questions..."></textarea>
            </div>
            <div>
                <!-- Bouton pour envoyer le formulaire -->
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>

    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>

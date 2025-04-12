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
        <div class="container mt-5 pt-5">
            <?php if (!isset($_GET["contact"])): // si le formulaire de contact n'a pas encore été envoyé ?>
                <form method="POST" action="src/models/contact.php" class="border p-4 rounded shadow-sm">
                    <h1 class="mb-4">Espace questions</h1>

                    <!-- nom -->
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Nom :</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" required>
                    </div>

                    <!-- prénom -->
                    <div class="mb-3">
                        <label for="firstName" class="form-label">Prénom :</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" required>
                    </div>

                    <!-- commentaire / questions -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Posez-nous vos questions :</label>
                        <textarea class="form-control" name="message" id="message" rows="6" placeholder="Laissez votre commentaire ou votre question ici..." required></textarea>
                    </div>


                    <!-- Bouton d'envoi -->
                    <div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            <?php else: ?>
                <?php
                    switch (htmlspecialchars($_GET["contact"])) {
                        case "success": //msg succè
                            echo (
                                '<div class="alert alert-success">'.
                                    'Votre message a bien été envoyé. Merci de nous avoir contactés !'.
                                '</div>'
                            );
                            break;
                        case "error": //msg erreur
                            echo (
                                '<div class="alert alert-danger">'.
                                    'Une erreur est survenue lors de l\'envoi. Veuillez réessayer plus tard.'.
                                '</div>'
                            );
                            break;
                    }
                ?>
            <?php endif; ?>
        </div>
        <!-- fin du form group/formulaire -->

        <!-- script JS pour animé le formulaire-->
        <script>
            //Sélectionne tous les éléments <input> et <textarea> dans la page
            const inputs = document.querySelectorAll("input, textarea");

            //Quand l'utilisateur clique dans le champ (focus)
            inputs.forEach((input) => {
                input.addEventListener("focus", () => {
                input.style.transition = "0.3s"; //On applique une transition douce pour que l'effet soit fluide
                input.style.borderColor = "#4CAF50"; //bordure couleur vert
                input.style.boxShadow = "0 0 5px #4CAF50"; //ajoute ombre autour du champ
                });
                //quand l'utilisateur quitte le champ
                input.addEventListener("blur", () => {
                input.style.borderColor = "#ccc"; //On remet la bordure en gris clair
                input.style.boxShadow = "none"; //On supprime l’ombre autour du champ
                });
            });
        </script>


        <small class="text-muted">Nous répondons à toutes les questions !</small>
    </div>                                                      

    </main>



    
<?php $content = ob_get_clean(); ?>


<?php require_once("templates/layout/layout.php"); ?>

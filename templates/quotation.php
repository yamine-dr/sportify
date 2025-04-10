<?php $title = "Quotation"; ?>

<?php ob_start(); ?>
    <!-- style css de la page
        body {
            background-color: rgb(54, 49, 49); /* Fond noir */
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        form {
            background-color: rgb(26, 207, 89) !important; /* Vert Spotify */
            color: black;
        }

        textarea.form-control,
        input.form-check-input {
            background-color: rgb(187, 246, 182); /* fond gris clair des champs */
            color: black;
        }

        textarea::placeholder {
            color: #666;
        }

        h1 {
            font-weight: bold;
        } 
    -->
    

    <div class="container mt-5 pt-5">
        <?php
        // après l'envoi du formulaire,
        // on test si le mail à bien été envoyé
        if (isset($_GET["confirmation"])) {
            switch (htmlspecialchars($_GET["confirmation"])) {
                case "success": // envoi réussi
                    echo "<div class=\"alert alert-success\">E-mail envoyé avec succès</div>";
                    break;
                case "error": // envoi échoué
                    echo "<div class=\"alert alert-success\">L'envoi de l'e-mail a échoué</div>";
                    break;
            }
        }
        ?>
        <!-- Début du formulaire -->
        <form method="POST" action="src/models/quotation.php" class="border p-4 rounded shadow-sm">
            <h1 class="mb-4">Demande de devis personnalisé</h1>

            <div class="mb-3">
                <label class="form-label">Format de la séance :</label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type_seance" value="collectif" id="radioCollectif" required>
                    <label class="form-check-label" for="radioCollectif">Collectif</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type_seance" value="individuel" id="radioIndividuel" required>
                    <label class="form-check-label" for="radioIndividuel">Individuel</label>
                </div>

            </div>
        
            <div class="mb-3">
                <label class="form-label">Lieu de la séance dans une salle :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="lieu_seance" value="prive" id="radioPrive" required>
                    <label class="form-check-label" for="radioPrive">Privé</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="lieu_seance" value="publique" id="radioPublique" required>
                    <label class="form-check-label" for="radioPublique">Publique</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="besoinsParticuliers" class="form-label">Vos besoins particuliers :</label>
                <textarea class="form-control" name="besoinsParticuliers" id="besoinsParticuliers" rows="6" placeholder="Décrivez ici vos besoins..."></textarea>
            </div>
            <div>
                <!-- Bouton pour envoyer le formulaire -->
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>

        </form>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>
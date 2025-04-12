<?php $title = "Sportify - Devis"; ?>

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
    <main id="quotation" class="container mb-5">
        <?php if (!isset($_GET["outcome"])): // if the form has not been sent yet ?>
            <form method="POST" action="index.php?action=quotation&form=completed" class="border p-4 rounded shadow-sm">
                <h1 class="mb-4">Demande de devis personnalisé</h1>

                <div class="mb-3">
                    <label class="form-label">Format de la séance :</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="session-type" value="collective" id="radio-collective" required>
                        <label class="form-check-label" for="radio-collective">Collectif</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="session-type" value="individual" id="radio-individual">
                        <label class="form-check-label" for="radio-individual">Individuel</label>
                    </div>
                </div>
            
                <div class="mb-3">
                    <label for="location" class="form-label">Lieu de la séance dans une salle :</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="location" value="private" id="radio-private" required>
                        <label class="form-check-label" for="radio-private">Privé</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="location" value="public" id="radio-public">
                        <label class="form-check-label" for="radio-public">Publique</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="user-needs" class="form-label">Vos besoins particuliers :</label>
                    <textarea class="form-control" name="user-needs" rows="6" placeholder="Décrivez vos besoins ici..."></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        <?php else: // if the form has been sent ?> 
            <?php
            // test if the mail was successfully sent            
            switch (htmlspecialchars($_GET["outcome"])) {
                case "success": // sending succeeded
                    echo(
                        '<div class="alert alert-success">'.
                            'E-mail envoyé avec succès à l\'adresse : '. $_SESSION["client"]["mail"] .
                        '</div>'
                    );
                    break;
                case "error": // sending failed
                    echo(
                        <<<HTML
                        <div class="alert alert-danger">
                            L'envoi de l'e-mail a échoué 
                        </div>
                        HTML
                    );
                    break;
            };
            ?>
        <?php endif; ?>
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>
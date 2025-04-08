<?php $title = "Quotation"; ?>

<?php ob_start(); ?>

<!-- body {
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
} -->
    

<div class="container mt-5 pt-5">
    <!-- Début du formulaire -->
    <form action="traitement.php" method="POST" class="border p-4 rounded shadow-sm"> <!--envoie les données a "traitement.php" avec POST -->
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
            <!-- Label avec classe Bootstrap -->
            <label for="besoinsParticuliers" class="form-label">Vos besoins particuliers :</label>
            <!-- style du textarea -->
            <textarea class="form-control" name="besoins_particuliers" id="besoinsParticuliers" rows="6" placeholder="Décrivez ici vos besoins..."></textarea>
        </div>


        <!-- champ pour saisir l'adresse mail -->
        <div class="mb-3">
            <label for="email" class="form-label">À quelle adresse mail souhaitez-vous recevoir une estimation du prix ?</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="exemple@domaine.com" required>
        </div>


        <div>
            <!-- Bouton pour envoyer le formulaire -->
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>

    </form>
</div>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>
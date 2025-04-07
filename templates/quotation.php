<?php $title = "Quotation"; ?>

<?php ob_start(); ?>

<div class="container my-5">
    <!-- Début du formulaire -->
    <form action="traitement.php" method="POST" class="border p-4 rounded bg-light shadow-sm"> <!--envoie les données a "traitement.php" avec POST -->
        <h1 class="mb-4">Demande de devis personnalisé</h1>

        <div class="mb-3">
            <label class="form-label">Format de la séance :</label>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="type_seance" value="collectif" id="radioCollectif">
                <label class="form-check-label" for="radioCollectif">Collectif</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="type_seance" value="individuel" id="radioIndividuel">
                <label class="form-check-label" for="radioIndividuel">Individuel</label>
            </div>
        </div>



        <div class="mb-3">
            <!-- Label avec classe Bootstrap -->
            <label for="besoinsParticuliers" class="form-label">Vos besoins particuliers :</label>
            <!-- Ajout de la classe Bootstrap pour styliser le textarea -->
            <textarea class="form-control" name="besoins_particuliers" id="besoinsParticuliers" rows="6" placeholder="Décrivez ici vos besoins..."></textarea>
        </div>

        <div>
            <!-- Bouton pour envoyer le formulaire -->
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>

    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout.php"); ?>
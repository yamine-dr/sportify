<?php $title = "Sportify - contact"; ?>

<?php ob_start(); ?>
    <h1>Contact</h1>

    <div class="contact-container">
        <h1>Contactez-nous</h1>

        <div class="contact-info">
        <i class="fas fa-phone"></i>
        <span id="phone">+33 1 23 45 67 89</span>
        </div>

        <div class="contact-info">
        <i class="fas fa-envelope"></i>
        <span id="email">contact@exemple.com</span>
        </div>
    </div>

    <div class="contact-info">
    <i class="fas fa-phone"></i>
    <span id="phone">+33 1 23 45 67 89</span>
    </div>

    <div class="contact-info">
    <i class="fas fa-envelope"></i>
    <span id="email">contact@exemple.com</span>
    </div>

    <div class="container mt-5 pt-5">
        <form action="traitement.php" method="POST" class="border p-4 rounded shadow-sm"> <!--envoie les données a "traitement.php" avec POST -->
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
    </div>

    <div>
        <h1>Nous répondons à toutes les questions !</h1>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>

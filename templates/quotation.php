<?php $title = "Quotation"; ?>

<?php ob_start(); ?>


<?php //traitement php du formulaire après l'envoi
use PHPMailer\PHPMailer\PHPMailer; //méthode utiliser pour php mailer
use PHPMailer\PHPMailer\Exception;

// Inclure les fichiers de PHPMailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php'; //on config le serv pour pouvoir envoyé des mail
require 'phpmailer/Exception.php';

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") { //on le recup ici avec la méthode post
    $type_seance = $_POST['type_seance']; //on met les info recup dans des variables
    $lieu_seance = $_POST['lieu_seance'];
    $besoins = $_POST['besoins_particuliers'];
    $email = $_POST['email'];

    // Calcul du prix de base
    $prix = 0;

    //prix en fct du type d la séance
    if($type_seance === 'individuel'){
        $prix += 30;
    } elseif ($type_seance === 'collectif'){
        $prix += 20;
    }

    // prix en fct du lieu
    if($lieu_seance === 'prive'){
        $prix += 15;
    } elseif ($type_seance === 'publique'){
        $prix += 0;
    }
    

    // Initialiser PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Paramètres SMTP pour Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        // info pour l'expediteur du mail 
        $mail->Username = '87projetwebl2@gmail.com';         // notre adresse Gmail
        $mail->Password = 'kdfa bqzw zztw npbv';     //  mot de passe d’application

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Expéditeur et destinataire
        $mail->setFrom('87projetwebl2@gmail.com', 'Sportify');
        $mail->addAddress($email); // destinataire

        // Contenu de l'e-mail
        $mail->isHTML(true); //Permet contenu du mail en HTML
        $mail->Subject = 'Sportify - Estimation du prix du devis'; //objet du mail
        $mail->Body = "
            <p>Bonjour,</p>

            <p>Voici l'estimation de votre séance personnalisée:</p>

            <ul>
                <li><strong>Type de séance :</strong> $type_seance</li>
                <li><strong>Lieu de séance :</strong> $lieu_seance</li>
                <li><strong>Besoins :</strong> $besoins</li>
                <li><strong> Coût estimé :</strong> $prix €</li>
                

            </ul>
            <p>Nous vous répondrons rapidement.</p>
            <p>Cordialement,<br>L'équipe Sportify</p>
        ";

        // Envoi
        $mail->send();
        $message_confirmation = [
            'type' => 'success',
            'text' => "E-mail envoyé avec succès à $email."
        ];
    } catch (Exception $e) {
        $message_confirmation = [
            'type' => 'error',
            'text' => "L'envoi de l'e-mail a échoué. Erreur : " . $mail->ErrorInfo
        ];
    }
}
?>









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
    <!-- Mon code pour le  formulaire -->
    <!--petit message confirmation ou non de l'envoi du mail  -->
    <?php if (isset($message_confirmation)): ?>
        <div class="alert <?= $message_confirmation['type'] === 'success' ? 'alert-success' : 'alert-danger' ?>">
            <?= htmlspecialchars($message_confirmation['text']) ?>
        </div>  
    <?php endif; ?>


   <!-- Début du formulaire -->
    <form method="POST" class="border p-4 rounded shadow-sm"> <!--envoie les données a "traitement.php" avec POST -->
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
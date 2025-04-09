<?php $title = "Sportify - contact"; ?>

<?php ob_start(); ?>
    <main id="contact">
        <h1 class="mb-5 text-center">Contacts</h1>

        <div class="container-fluid g-0">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="col-12 col-lg-8 p-4">
                        <div>
                            <div>
                                <h2 class="fw-bold">Horaires du bureau</h2>
                            </div>
                        </div>
                        <div>
                            <div>
                                <p>Monday to Friday: 07:00 – 19:45
                                    Saturday to Sunday: 11:00 – 17:00</p>
                            </div>
                        </div>

                        <div>
                            <div>
                                <h2 class="fw-bolder">Address</h2>
                            </div>
                        </div>
                        <div>
                            <div>
                                <p>Street 3043 Clarence Court -&nbsp;Fayetteville&nbsp;NC <br>North Carolina 28306</p>
                            </div>
                        </div>

                        <div>
                            <div>
                                <h2 class="fw-bolder">Phone Numbers</h2>
                            </div>
                        </div>

                        <div>
                            <div>
                                <p>Number 910-249-5283<br>Mobile Number 910-492-4232</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <div class="ratio ratio-16x9" lc-helper="gmap-embed">
                            <iframe src="https://maps.google.com/maps?q=London%2C%20UK&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="contact-container">
            <h1>Contactez-nous</h1>
    
            <div class="contact-info">
                <span id="phone">+33 1 23 45 67 89</span>
            </div>
    
            <div class="contact-info">
            <span id="email">contact@exemple.com</span>
            </div>
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
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>

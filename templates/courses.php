<?php $title = "Sportify - Cours"; ?>

<?php
// variables from the controller:
// - $isConnected (boolean): if the user is connected
// - $courses (array)
?>

<?php ob_start(); ?>
    <main id="courses" class="mt-5">
        <h1 class="mb-4 text-center">Cours</h1>

        <div class="container mb-5">
            <!-- courses grid -->
            <div class="mb-5 row justify-content-center align-items-center align-items-md-stretch gap-5">
                <?php foreach ($courses as $course): ?>
                    <div class="col-12 col-lg-3 d-flex justify-content-center">
                        <div class="col-9 col-lg-12 card course-card">
                            <img src="assets/images/homepage-features1.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase"><?= $course["title"] ?></h5>
                                <div class="card-text my-3">
                                    <ul>
                                        <li>Coach : <?= $course["coach"] ?></li>
                                        <li>Durée : <?= $course["duration"] ?></li>
                                        <?php if ($course["nbPlacesRemaining"] > 0): ?>
                                            <li class="text-primary">
                                                <?= $course["nbPlacesRemaining"] ?> places disponibles
                                            </li>
                                        <?php else: ?>
                                            <li class="text-danger">COMPLET</li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <?php if ($isConnected): ?>
                                    <?php if ($course["nbPlacesRemaining"] > 0): ?>
                                        <a
                                        href="index.php?action=course-registration&course=<?= str_replace(' ', '-', $course["title"]) ?>"
                                        class="btn btn-primary"
                                        role="button"
                                        > 
                                            Réserver 
                                        </a>
                                    <?php else: ?>
                                        <button class="btn btn-primary" disabled> 
                                            Réserver 
                                        </button>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="mb-3 small alert alert-danger">
                                        Connectez vous d'abord pour vous inscrire
                                    </div>
                                    <a href="index.php?action=signin" class="btn btn-primary" role="button">
                                        Connexion
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>
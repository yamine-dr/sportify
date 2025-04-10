<?php $title = "Sportify - s'inscrire"; ?>

<!-- 
    variables from the controller:
    - $isConnected (boolean): if the user is connected
    - $course (string): name of the course
    - $coursesWithlevel (array): the courses with different levels
    - $courseHasLevel (boolean)
-->

<?php ob_start(); ?>
    <main id="coursesRegister" class="mt-5">
        <h1 class="mb-5 text-center">Inscription<?= ($course !== '') ? ' : ' . $course : '' ?></h1>

        <div class="mx-auto p-4 p-md-5 d-flex flex-column border rounded-3 bg-light w-50">
                <?php if (!isset($_GET["registered"])): ?>
                    <form method="POST" action="src/models/courses-register.php">
                        <fieldset disabled>
                            <div class="mb-3">
                                <label for="course" class="form-label">Cours</label>
                                <input type="text" id="course" name="course" class="form-control" value="<?= $course ?>">
                            </div>
                        </fieldset>
                        <?php if ($courseHasLevel): ?>
                        <div class="mb-3">
                            <label for="level" class="form-label">Choisissez le niveau</label>
                            <select id="level" class="form-select" aria-label="Selection du niveau" required>
                                <option value="" selected>Niveau choisi</option>
                                <option value="easy">Débutant</option>
                                <option value="medium">Intermédiare</option>
                                <option value="hard">Avancé</option>
                            </select>
                        </div>
                        <?php endif; ?>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Confirmer l'inscription</button>
                    </form>
                <?php elseif (htmlspecialchars($_GET["registered"]) == "success"): ?>
                    <div class="alert alert-success">
                        L'inscription est validée !
                    </div>
                    <a href="index.php" class="btn btn-primary">
                        Retourner à l'acceuil
                    </a>
                <?php endif; ?>
            </div>
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>
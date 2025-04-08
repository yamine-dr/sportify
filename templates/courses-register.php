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
        <h1 class="mb-5 text-center">Inscription : <?= $course ?></h1>

        <div class="mx-auto d-flex flex-column w-50">
            <form method="POST" action="">
                <fieldset disabled>
                    <div class="mb-3">
                        <label for="course" class="form-label">Cours</label>
                        <input type="text" id="course" class="form-control" placeholder="<?= $course ?>">
                    </div>
                </fieldset>
                <?php if ($courseHasLevel): ?>
                <div class="mb-3">
                    <label for="level" class="form-label">Choisissez le niveau</label>
                    <select id="level" class="form-select" aria-label="Selection du niveau">
                        <option value="easy" selected>Débutant</option>
                        <option value="medium">Intermédiare</option>
                        <option value="hard">Avancé</option>
                    </select>
                </div>
                <?php endif; ?>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Confirmer</button>
            </form>
        </div>
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>
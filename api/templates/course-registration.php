<?php $title = "Sportify - Inscription au cours"; ?>

<!-- 
    variables from the controller:
    - $course (array): infos of the course
-->

<?php ob_start(); ?>
    <main id="course-registration">
        <h1 class="mb-5 text-center">
            Inscription<?= ($course["title"] !== '') ? ' : ' . strtolower(str_replace('-', ' ', $course["title"])) : '' ?>
        </h1>

        <div class="mx-auto p-4 p-md-5 d-flex flex-column border rounded-3 bg-light w-50">
                <?php if (!isset($_GET["outcome"])): ?>
                    <form method="POST" action="index.php?action=course-registration&course=<?= $course["title"] ?>&form=completed">
                        <fieldset class="d-none">
                            <div class="mb-3">
                                <label for="course" class="form-label">Cours</label>
                                <input type="text" id="course" name="course" class="form-control" value="<?= $course["title"] ?>">
                            </div>
                            <input type="text" name="courseHasLevel" value="<?= $course["hasLevels"] ? true : false ?>">
                        </fieldset>
                        <?php if ($course["hasLevels"]): ?>
                            <div class="mb-3">
                                <label for="level" class="form-label">Choisissez le niveau</label>
                                <select id="level" name="level" class="form-select" aria-label="Selection du niveau" required>
                                    <option value="" selected>Niveau choisi</option>
                                    <option value="easy">Débutant</option>
                                    <option value="medium">Intermédiare</option>
                                    <option value="hard">Avancé</option>
                                </select>
                            </div>
                        <?php endif; ?>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Confirmer l'inscription</button>
                    </form>
                <?php else: ?>
                    <?php 
                    switch (htmlspecialchars($_GET["outcome"])) {
                        case "success":
                            echo(
                                <<<HTML
                                <div class="alert alert-success">
                                    L'inscription est validée !
                                </div>
                                <a href="index.php" class="btn btn-primary">
                                    Retourner à l'acceuil
                                </a>
                                HTML
                            );
                            break;
                        case "error":
                            echo(
                                <<<HTML
                                <div class="alert alert-danger">
                                    Erreur lors de l'inscription
                                </div>
                                <a href="index.php?action=courses" class="btn btn-primary">
                                    Voir les cours
                                </a>
                                HTML
                            );
                            break;
                    }
                    ?>
                <?php endif; ?>
            </div>
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>
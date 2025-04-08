<?php $title = "Sportify - cours"; ?>

<!-- 
    variables from the controller:
    - $isConnected (boolean): if the user is connected
    - $signinBtn (HTML string): button to display if user is not connected
    - $courses1, $courses2 (array)
    - function titleInURL(string): string -> turn a course title in URL format
-->

<?php
function titleInURL($str): string {
    $res = strtolower($str);
    $res = str_replace(' ', '-', $res);
    return $res;
}
?>

<?php ob_start(); ?>
    <main id="courses" class="mt-5">
        <h1 class="mb-4 text-center">Cours</h1>

        <div class="container mb-5">
            <!-- 1st row -->
            <div class="mb-5 d-flex flex-column flex-md-row justify-content-center align-items-center align-items-md-stretch gap-4">
                <?php foreach ($courses1 as $course): ?>
                    <div class="card course-card" style="width: 15rem;">
                        <img src="assets/images/homepage-features1.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase"><?= $course["title"] ?></h5>
                            <div class="card-text my-3">
                                <ul>
                                    <li>Coach : <?= $course["coach"] ?></li>
                                    <li>Durée : <?= $course["duration"] ?></li>
                                    <li><?= $course["places"] ?> places</li>
                                </ul>
                            </div>
                            <?=
                            $isConnected ? 
                                '<a href="index.php?action=courses-register&course=' . titleInURL($course["title"]) . '" class="btn btn-primary" role="button">' 
                                    . 'S\'inscrire' 
                                . '</a>' 
                                : $signinBtn;
                            ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- 2nd row -->
            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center align-items-md-stretch gap-4">
                <?php foreach ($courses2 as $course): ?>
                    <div class="card course-card" style="width: 15rem;">
                        <img src="assets/images/homepage-features1.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase"><?= $course["title"] ?></h5>
                            <div class="card-text my-3">
                                <ul>
                                    <li>Coach : <?= $course["coach"] ?></li>
                                    <li>Durée : <?= $course["duration"] ?></li>
                                    <li><?= $course["places"] ?> places</li>
                                </ul>
                            </div>
                            <?=
                            $isConnected ? 
                                '<a href="index.php?action=courses-register&course=' . titleInURL($course["title"]) . '" class="btn btn-primary" role="button">' 
                                    . 'S\'inscrire' 
                                . '</a>' 
                                : $signinBtn;
                            ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>
<?php
$title = "Sportify - Cours";
require_once("templates/ui/text.php");

/* variables from the controller:
  - $isConnected (boolean): if the user is connected
  - $courses (array), with the following keys for each course: 
    ["id", "title", "coach", "duration", "nbPlacesRemaining", "hasLevels"]
*/
$isConnected = true;
?>

<?php ob_start(); ?>
  <main id="courses" class="d-flex-col gap-2">
    <?= h(1, "Cours") ?>

    <?php if (!$isConnected): ?>
      <div class="h6 alert alert-danger text-center w-fit">
        Connectez vous d'abord pour vous inscrire
      </div>
    <?php endif; ?>

    <!-- courses grid -->
    <div class="row w-100 gap-4 justify-content-center align-items-stretch text-center">
      <?php foreach ($courses as $course): ?>
        <div class="col-8 col-md-5 col-lg-3 card px-0 pb-3 justify-content-between align-items-center">
          <h5 class="card-title p-1 w-100 text-uppercase bg-body-secondary rounded-top-2">
            <?= $course["title"] ?>
          </h5>

          <ul class="list-unstyled">
            <li>- Coach : <?= $course["coach"] ?></li>
            <?= $course["duration"] ? "<li>- Durée : {$course["duration"]}</li>" : "" ?>
            <!-- places remaining -->
            <?php if ($course["nbPlacesRemaining"] > 0): ?>
              <li class="text-success">
                - <?= $course["nbPlacesRemaining"] ?> places disponibles
              </li>
            <?php else: ?>
              <li class="text-danger">COMPLET</li>
            <?php endif; ?>
          </ul>

          <!-- course registration button -->
          <?php if ($isConnected && $course["nbPlacesRemaining"] > 0): ?>
            <button
            class="btn btn-primary w-fit"
            <?php /* Link of course registration: index.php?action=course-registration&course=<?= str_replace(' ', '-', $course["title"])?> */ ?>
            onclick="<?php
              $courseRegistrationUrl = "index.php?action=course-registration&course=" 
                . str_replace(' ', '-', $course["title"]);
              echo "window.location.href ='{$courseRegistrationUrl}'";
            ?>"
            > 
              Réserver 
            </button>
          <?php else: ?>
            <button
              class="btn btn-primary w-fit"
              onclick="alert('Connectez vous d\'abord pour vous inscrire');"
            > 
              Réserver 
            </button>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>
<?php
$title = "Sportify";
require_once("templates/ui/text.php");
require_once("templates/ui/buttons.php");

$checkIconSvg = <<<HTML
  <svg class="text-success" width="1.5rem" height="1.5rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
      <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
      <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
  </svg>
HTML;
$starIconSvg = <<<HTML
  <svg class="text-success" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
  </svg>
HTML;

$testimonials = [
    [
        "name" => "Joumana Brahmi",
        "content" => "Je conseille fortement !",
    ],
    [
        "name" => "Ryad Bekheira",
        "content" => "Les séances sont très amusantes, c'est très bien organisé.",
    ],
    [
        "name" => "Yamine Daroueche",
        "content" => "Des supers coachs !",
    ],
];
?>

<?php ob_start(); ?>
  <main id="homepage" class="d-flex-col gap-5">
    <!-- HERO SECTION -->
    <section class="d-flex-center px-5 w-100 h-550px">
      <div class="d-flex-col gap-4">
        <?= h(1, "Le sport,</br> à Limoges,</br> comme vous l'aimez!") ?>
        <div class="<?= $_SESSION["isClientConnected"] ? "d-none" : "" ?> w-fit">
          <?= $signupButton ?>
        </div>
      </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="d-flex-col gap-4 px-5 w-100">
      <div class="row align-items-md-center">
        <?= h(2, "&#193; propos de Sportify") ?>
      </div>
      <div class="row align-items-md-center">
          <!-- mission statement and stats -->
          <div class="col-lg-6 d-flex-col gap-3">
            <h3>
              Notre mission :
              <br>accompagner les limougeauds vers la meilleure forme de leur vie.
            </h3>
            <div class="row w-100">
              <div class="col-6">
                <p class="fs-1">20+</p>
                <p class="small text-uppercase">Années d'expériences</p>
              </div>
              <div class="col-6">
                <p class="fs-1">3</p>
                <p class="small text-uppercase">Locations</p>
              </div>
            </div>
            <div class="row w-100">
              <div class="col-6">
                <p class="fs-1">6</p>
                <p class="small text-uppercase">Cours</p>
              </div>
              <div class="col-6">
                <p class="fs-1">500+</p>
                <p class="small text-uppercase">Adhérents</p>
              </div>
            </div>
          </div>

          <!-- About section images "Santé" and "Plaisir" -->
          <div class="d-none md:d-flex-col gap-3 col-sm-6 col-lg-3">
            <div class="card shadow-sm w-75">
              <img
                src="assets/images/homepage-about1.jpg"
                alt="Un homme agé qui soulève 2 haltères"
                class="card-img-top"
                loading="lazy"
              >
              <div class="card-body py-1 fs-5 fw-semibold text-center text-uppercase">
                Santé
              </div>
            </div>
            <div class="card shadow-sm w-75">
              <img
                src="assets/images/homepage-about2.jpg"
                alt="Un homme qui sourit dans une salle de sport"
                class="card-img-top"
                loading="lazy"
              >
              <div class="card-body py-1 fs-5 fw-semibold text-center text-uppercase">
                Plaisir
              </div>
            </div>
          </div>
          <!-- About section image "Inclusive" -->
          <div class="d-none md:d-flex-center col-sm-6 col-lg-3">
            <div class="card shadow-sm w-75">
              <img
                src="assets/images/homepage-about3.jpg"
                alt="Un homme en chaise roulante qui fait de la musculation"
                class="card-img-top"
                loading="lazy"
              >
              <div class="card-body py-1 fs-5 fw-semibold text-center text-uppercase">
                Inclusive
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- FEATURES SECTION -->
    <section class="d-flex-center max-lg:d-flex-col gap-4 px-5 w-100">
      <!-- image(s) -->
      <div class="d-flex-col gap-4 w-35 max-lg:w-75">
        <img
          class="d-none d-lg-block position-relative img-fluid w-fit rounded-3"
          src="assets/images/homepage-features1.jpg"
          alt="Une salle de sport avec des tapis de course"
          loading="lazy"
        >
        <img
          class="d-block position-relative img-fluid w-fit rounded-3"
          src="assets/images/homepage-features2.jpg"
          alt=""
          loading="lazy"
        >
      </div>
      <!-- text -->
      <div class="col-lg-6 d-flex-col gap-3">
        <div class="text-center text-lg-start">
          <?= h(2, "Une salle de sport bien équipée") ?>
          <p class="mt-3">
            Chez Sportify, nous utilisons des appareils de musculation derniers cris. 
          </p>
        </div>

        <div class="d-flex justify-content-center justify-content-lg-start w-100">
          <div class="d-inline-flex gap-2">
            <?= $checkIconSvg ?>
            <p>Salles climatisées</p>
          </div>
        </div>
        <div class="d-flex justify-content-center justify-content-lg-start w-100">
          <div class="d-inline-flex gap-2">
            <?= $checkIconSvg ?>
            <p>Ouverture 7/7J, 6 h - 22 h</p>
          </div>
        </div>
        <div class="d-flex justify-content-center justify-content-lg-start w-100">
          <div class="d-inline-flex gap-2">
            <?= $checkIconSvg ?>
            <p>Parkings sécurisés</p>
          </div>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="d-flex-col gap-4 px-5 w-100">
      <!-- Testimonials section title -->
      <div class="text-center">
        <?= h(2, "Validé par nos adhérents") ?>
        <p>Voilà ce que nos clients disent de nous.</p>
      </div>
      <!-- testimonials cards -->
      <div class="d-flex-center flex-wrap justify-content-center gap-3">
        <?php for ($i=0; $i < count($testimonials); $i++): ?>
          <div class="card w-max-250px shadow">
            <div class="card-body">
              <?= h(5, $testimonials[$i]["name"]) ?>
              <p><?= $testimonials[$i]["content"] ?></p>
              <div>
                <?php for ($j=0; $j < 5; $j++) { echo $starIconSvg; } ?>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </section>
    
    <!-- PRICING SECTION -->
    <section class="d-flex-col gap-4 px-5 w-100">
      <div class="text-center">
        <?= h(2, "Tarifs") ?>
        <p>Nous proposons différents services selon vos besoin.</p>
      </div>
      <!-- pricing cards -->
      <div class="row gap-3 w-100 text-center">
        <!-- card 1 -->
        <div class="card col p-0">
          <div class="card-header d-flex-center p-0 pt-1">
            <?= h(4, "Basique") ?>
          </div>
          <div class="card-body p-2">
            <p class="card-title display-6 fw-semibold">
              25€ <small class="text-muted fs-3">/ mois</small>
            </p>
            <ul class="d-flex-col gap-1 list-unstyled">
              <li>- Bénifice 1</li>
              <li>- Bénifice 2</li>
              <li>- Bénifice 3</li>
            </ul>
            <button type="button" class="btn btn-lg btn-primary">Souscrire</button>
          </div>
        </div>
        <!-- card 2 -->
        <div class="card col p-0">
          <div class="card-header d-flex-center p-0 pt-1">
            <?= h(4, "Premium") ?>
          </div>
          <div class="card-body p-2">
            <p class="card-title display-6 fw-semibold">
              40€ <small class="text-muted fs-3">/ mois</small>
            </p>
            <ul class="d-flex-col gap-1 list-unstyled">
              <li>- Bénifice 1</li>
              <li>- Bénifice 2</li>
              <li>- Bénifice 3</li>
            </ul>
            <button type="button" class="btn btn-lg btn-primary">Souscrire</button>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>
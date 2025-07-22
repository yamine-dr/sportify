<?php
$title = "Sportify";
require_once("templates/ui/text.php");
require_once("templates/ui/buttons.php");
require_once("templates/ui/icons.php");

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

$pricingList = [
  [
    "title" => "Basique",
    "price" => 25,
    "benefits" => [
      'sans engagement',
      'remises sur <a href="https://www.nutripure.fr/fr/" target="_blank" rel="noopener noreferrer">Nutripure</a>'
    ]
  ],
  [
    "title" => "Premium",
    "price" => 40,
    "benefits" => [
      'le package "Basique"',
      'Sauna'
    ]
  ],
];
?>

<?php ob_start(); ?>
  <main id="homepage" class="d-flex-col gap-5">
    <!-- HERO SECTION -->
    <section class="d-flex-center px-5 w-100 h-550px">
      <div class="d-flex-col gap-4">
        <?= h(1, "Le sport,</br> à Limoges,</br> comme vous l'aimez!") ?>
        <div class="<?= $isConnected ? "d-none" : "" ?> w-fit">
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

            <?php foreach ([["20+" => "Années d'expériences", "3" => "Sites"], ["6" => "Cours", "500+" => "Adhérents"]] as $col): ?>
              <div class="row w-100">
                <?php foreach ($col as $number => $label): ?>
                  <div class="col-6">
                    <p class="fs-1"><?= $number ?></p>
                    <p class="text-uppercase"><?= $label ?></p>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endforeach; ?>
          </div>

          <!-- About section images "Santé" and "Plaisir" -->
          <div class="d-none md:d-flex-col gap-3 col-sm-6 col-lg-3">
            <div class="card shadow-sm max-lg:w-50 max-lg:w-50 w-75">
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
            <div class="card shadow-sm max-lg:w-50 w-75">
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
            <div class="card shadow-sm max-lg:w-50 w-75">
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

        <?php foreach (["Salles climatisées", "Ouverture 7/7J, 6 h - 22 h", "Parkings sécurisés"] as $text): ?>
          <div class="d-flex justify-content-center justify-content-lg-start w-100">
            <div class="d-inline-flex gap-2">
              <?= $circledCheckIcon ?>
              <p><?= $text ?></p>
            </div>
          </div>
        <?php endforeach; ?>
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
        <?php foreach ($testimonials as $testimonial): ?>
          <div class="card w-max-250px shadow">
            <div class="card-body">
              <?= h(5, $testimonial["name"]) ?>
              <p><?= $testimonial["content"] ?></p>
              <div>
                <?php for ($j=0; $j < 5; $j++) { echo $starIcon; } ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
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
        <?php foreach ($pricingList as $pricing): ?>
          <div class="card col p-0">

            <div class="card-header d-flex-center p-0 pt-1">
              <?= h(4, $pricing["title"]) ?>
            </div>

            <div class="card-body d-flex flex-column p-2 justify-content-between">
              <p class="card-title display-6 fw-semibold">
                <?= $pricing["price"] ?>€ <small class="text-muted fs-3 fw-lighter">/ mois</small>
              </p>
              <ul class="d-flex-col gap-1 list-unstyled">
                <?php foreach ($pricing["benefits"] as $benefit): ?>
                  <li><?= "{$checkIcon} {$benefit}" ?></li>
                <?php endforeach; ?>
              </ul>
              <button type="button" class="btn btn-lg btn-primary w-fit mx-auto">Souscrire</button>
            </div>

          </div>
        <?php endforeach; ?>
      </div>
    </section>
  </main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>
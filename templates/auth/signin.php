<?php
$title = "Sportify - connexion";
require_once("templates/ui/text.php");
require_once("templates/ui/icons.php");

$formInputs = [
	[
		"type" => "email",
		"id" => "mail",
		"label" => "Email"
	],
	[
		"type" => "password",
		"id" => "password",
		"label" => "Mot de passe"
	]
];
?>

<?php ob_start(); ?>
	<main id="signin" class="container col-xl-10 col-xxl-8 px-4 py-5">
		<div class="row align-items-center g-lg-5 py-5">
			<!-- TITLE PART -->
			<div class="col-lg-7">
				<div class="d-flex gap-1 justify-content-center justify-content-lg-start align-items-center">
					<?= $SportifyIcon ?>
					<?= h(1, "Sportify") ?>
				</div>
				<p class=" display-6 text-center text-lg-start">Le meilleur du sport à Limoges !</p>
			</div>

			<!-- FORM PART -->
			<div class="col-md-10 col-lg-5">
				<div class="p-4 p-md-5 border rounded-3 bg-body-secondary">
					<?php if (!isset($_GET["outcome"])): // display form if not submitted yet ?>

						<!-- FORM -->
						<form method="POST" action="index.php?action=signin&form=completed">
							<?php foreach ($formInputs as $input): ?>
								<div class="form-floating mb-3">
									<input
										type="<?= $input["type"] ?>"
										class="form-control"
										name="<?= $input["id"] ?>"
										id="<?= $input["id"] ?>"
										placeholder=""
										required
									>
									<label for="<?= $input["id"] ?>">
										<?= $input["label"] ?><span style="color:#dc3545;">*</span>
									</label>
								</div>
							<?php endforeach; ?>
							
							<button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
						</form>

						<hr class="my-4">

						<div>
							<small>Pas de compte ?</small>
							<a href="index.php?action=signup" class="fw-semibold">Inscription</a>
						</div>

					<?php else: // display outcome if form submitted ?>

						<?php
						switch (htmlspecialchars($_GET["outcome"])) {
							case "success":
								echo(
									<<<HTML
										<div class="alert alert-success text-center"> 
											Connexion réussie
										</div>
										<a href="index.php?action=courses" class="btn btn-primary w-100" role="button"> 
											Voir les cours
										</a>
									HTML
								);
								break;
							case "error":
								echo(
									<<<HTML
										<div class="alert alert-danger text-center"> 
											Erreur : e-mail et/ou mot de passe incorrect(s),
											<br> veuillez réessayer
										</div>
										<a href="index.php?action=signin" class="btn btn-primary w-100" role="button"> 
											Connexion
										</a>
									HTML
								);
								break;
						}	
						?>
						
					<?php endif; ?>
				</div>
			</div>
		</div>
	</main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout/layout.php"); ?>
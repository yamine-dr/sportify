<?php
$title = "Sportify - Inscription";
require_once("templates/ui/text.php");
require_once("templates/ui/icons.php");

$formInputs = [
	[
		"type" => "text",
		"id" => "firstname",
		"label" => "Prénom"
	],
	[
		"type" => "text",
		"id" => "lastname",
		"label" => "Nom"
	],
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
	<main id="signup">
		<div class="row align-items-center p-5">
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
						<form method="POST" action="index.php?action=signup&form=completed">
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

							<div class="form-check mb-3">
								<input type="checkbox" class="form-check-input" id="terms-of-use" checked required>
								<label class="form-check-label" for="terms-of-use">J'accepte les conditions d'utilisation</label>
							</div>
							
							<button class="w-100 btn btn-lg btn-primary" type="submit">Inscription</button>
						</form>
						
						<hr class="my-4">
						
						<div>
							<small>Vous avez un compte ?</small>
							<a href="index.php?action=signin" class="fw-semibold">Connexion</a>
						</div>

					<?php else: // display outcome if form submitted ?>

						<?php
						switch (htmlspecialchars($_GET["outcome"])) {
							case "success":
								echo(
									<<<HTML
										<div class="alert alert-success text-center"> 
											Inscription réussie
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
											Erreur : cet e-mail a déjà un compte,
											<br> veuillez réessayer
										</div>
										<a href="index.php?action=signup" class="btn btn-primary w-100" role="button"> 
											Inscription 
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
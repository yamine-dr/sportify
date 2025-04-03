<?php $title = "Sportify - connexion"; ?>

<?php 
$verificationLink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
	=== 'on' ? "https" : "http") . "://" . 
	$_SERVER['HTTP_HOST'] . "/sportify/src/verification.php";
?>

<?php ob_start(); ?>
	<!-- AUTH -->
	<div class="min-vh-100 position-relative d-flex justify-content-center overflow-x-hidden p-5 p-lg-0 bg-body">
		<!-- Lelft part of the AUTH -->
		<div class="h-100 col-lg-5 col-xl-5 p-12 p-xl-10 position-absolute start-0 top-0 d-none d-lg-block bg-body-secondary border-end-lg">
			<div class="h-100 px-1 d-flex flex-column">
				<a class="d-block" href="#">
					<h1 class="mt-1 h-rem-8 w-rem-auto">Sportify</h1>
				</a>
				
				<div class="mt-auto mb-5 w-lg-75">
					<h1 class="ls-tight">
						La meilleure salle de Limoges!
					</h1>
				</div>
			</div>
		</div>

		<!-- right part of the AUTH -->
		<div class="pt-lg-16 px-lg-16 col-12 col-md-9 col-lg-7 offset-xl-7 offset-lg-5 d-flex flex-column justify-content-center position-relative">
			<div class="row">
				<div class="col-lg-10 col-md-9 col-xl-8 col-xxl-7 mx-auto ms-xl-0">
					<div class="mb-12">
						<h2 class="ls-tight fw-bolder">
							Connexion
						</h2>
						<p class="text-sm mt-2 text-body-secondary">
							Bon retour parmi nous!
						</p>
					</div>

					<!-- FORM -->
					<form method="POST" action="<?= $verificationLink ?>" class="mt-4 vstack gap-4">
						<div>
							<label class="form-label" for="inputEmail">Email</label>
							<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Votre email" required>
						</div>

						<div>
							<div class="d-flex align-items-center mb-2">
								<label class="form-label mb-0" for="inputPassword">Mot de passe</label>
								<a href="#" class="ms-auto d-inline-block text-sm border-bottom border-dotted text-muted text-primary-hover">Mot de passe oublié ?</a>
							</div>
							<input type="password" class="form-control" id="inputPassword" name="inputPassword" autocomplete="current-password" required>
						</div>
						
						<div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="check_example" id="check_example">
								<label class="form-check-label" for="check_example">
									Rester connecter
								</label>
							</div>
						</div>

						<div>
							<button type="submit" class="btn btn-primary w-100">
								Connexion
							</button>
						</div>
					</form>


					<div class="mt-3 mb-4">
						<small>Pas de compte ?</small>
						<a href="#" class="text-primary text-sm fw-semibold">Inscription</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $content = ob_get_clean(); ?>

<?php require_once("../layout.php"); ?>
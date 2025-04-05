<?php $title = "Sportify - connexion"; ?>

<?php 
$verificationLink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
	=== 'on' ? "https" : "http") . "://" . 
	$_SERVER['HTTP_HOST'] . "/sportify/src/models/verification.php";
?>

<?php ob_start(); ?>
	<main id="signin" class="container col-xl-10 col-xxl-8 px-4 py-5">
		<div class="row align-items-center g-lg-5 py-5">
			<!-- LEFT PART -->
			<div class="col-lg-7 text-center text-lg-start">
				<h1 class="display-4 fw-bold lh-1 mb-3">Sportify</h1>
				<p class="col-lg-10 fs-4">La meilleure salle de Limoges !</p>
			</div>
			<!-- RIGHT PART -->
			<div class="col-md-10 mx-auto col-lg-5">
				<div class="p-4 p-md-5 border rounded-3 bg-light">
					<!-- FORM -->
					<form method="POST" action="<?= $verificationLink ?>">
						<div class="form-floating mb-3">
							<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="jaime@sportify.com" required>
							<label for="inputEmail">Email</label>
						</div>
						<div class="form-floating mb-3">
							<input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="" required>
							<label for="inputPassword">Mot de passe</label>
						</div>
						<div class="checkbox mb-3">
							<label>
								<input type="checkbox" value="remember-me"> Se souvenir de moi
							</label>
						</div>
						<button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
					</form>
					
					<hr class="my-4">

					<div>
						<small>Pas de compte ?</small>
						<a href="index.php?action=signup" class="text-primary text-sm fw-semibold">Inscription</a>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php $content = ob_get_clean(); ?>

<?php require_once("templates/layout.php"); ?>
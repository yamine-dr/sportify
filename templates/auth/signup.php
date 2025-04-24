<?php $title = "Sportify - Inscription"; ?>

<!--
	variables from the controller:
    - $isConnected (boolean): if the user is connected
-->

<?php ob_start(); ?>
	<main id="signup" class="container col-xl-10 col-xxl-8 px-4 py-5">
		<div class="row align-items-center g-lg-5 py-5">
			<!-- LEFT PART -->
			<div class="col-lg-7 text-center text-lg-start">
				<h1 class="display-4 fw-bold lh-1 mb-3">
					<img src="assets/images/logo.png" alt="logo de Sportify" width="80" class="d-inline-block align-text-top">
					Sportify
				</h1>
				<p class="col-lg-10 fs-4">Le meilleur du sport à Limoges !</p>
			</div>
			<!-- RIGHT PART -->
			<div class="col-md-10 mx-auto col-lg-5">
				<div class="p-4 p-md-5 border rounded-3 bg-light">
					<!-- FORM -->
					<?php if (!isset($_GET["outcome"])): ?>
						<form method="POST" action="index.php?action=signup&form=completed">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" name="firstname" id="firstname" placeholder="" required>
								<label for="firstname">Prénom</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" name="lastname" id="lastname" placeholder="" required>
								<label for="lastname" class="">Nom</label>
							</div>
							<div class="form-floating mb-3">
								<input type="email" class="form-control" name="mail" id="mail" placeholder="jaime@sportify.com" required>
								<label for="mail">Email</label>
							</div>
							<div class="form-floating mb-3">
								<input type="password" class="form-control" name="password" id="password" placeholder="" required>
								<label for="password">Mot de passe</label>
							</div>
							<button class="w-100 btn btn-lg btn-primary" type="submit">Inscription</button>
							<hr class="my-4">
							<small class="text-muted">En cliquant sur "Inscription", vous acceptez les conditions d'utilisation.</small>
						</form>
					<?php else: ?>
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
<?php $title = "Sportify - connexion"; ?>

<?php ob_start(); ?>
	<main id="signin" class="container col-xl-10 col-xxl-8 px-4 py-5">
		<div class="row align-items-center g-lg-5 py-5">
			<!-- LEFT PART -->
			<div class="col-lg-7 text-center text-lg-start">
				<h1 class="display-4 fw-bold lh-1 mb-3">Sportify</h1>
				<p class="col-lg-10 fs-4">Les meilleures salles de Limoges !</p>
			</div>
			<!-- RIGHT PART -->
			<div class="col-md-10 mx-auto col-lg-5">
				<div class="p-4 p-md-5 border rounded-3 bg-light">
					<?php if (!isset($_GET["outcome"])): ?>
						<!-- FORM -->
						<form method="POST" action="index.php?action=signin&form=completed">
							<div class="form-floating mb-3">
								<input type="email" class="form-control" name="mail" placeholder="jaime@sportify.com" required>
								<label for="mail">Email</label>
							</div>
							<div class="form-floating mb-3">
								<input type="password" class="form-control" name="password" placeholder="" required>
								<label for="password">Mot de passe</label>
							</div>
							<button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
						</form>
						
						<hr class="my-4">

						<div>
							<small>Pas de compte ?</small>
							<a href="index.php?action=signup" class="text-primary text-sm fw-semibold">Inscription</a>
						</div>
					<?php else: ?>
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
											Erreur : e-mail et/ou mot de passe incorrects,
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
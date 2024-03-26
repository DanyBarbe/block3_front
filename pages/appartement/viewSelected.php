<?php
include '../../controller/appartementView.php';
$inputs = [
	'code postal',
	'ville',
	'adresse',
	'charge',
	'garantie',
	'loyer',];
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../../style/style.css">
	<title>Appartement</title>
</head>
<body>
<?php
include '../../controller/navbar.html';
?>

<header class="page-header">
	<h2>Gestion Appartement</h2>
</header>

<main class="appartement-view">
	<article class="article-selected">
		<section class="appartement-container">
			<section class="appartement-data">
				<h3>Appartement Info</h3>
				<nav>
					<button type="button" class="btn btn-update btn-form" data-section="appartement-update">
						<span class="icon-content">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<path d="M368.4 18.3L312.7 74.1 437.9 199.3l55.7-55.7c21.9-21.9 21.9-57.3 0-79.2L447.6 18.3c-21.9-21.9-57.3-21.9-79.2 0zM288 94.6l-9.2 2.8L134.7 140.6c-19.9 6-35.7 21.2-42.3 41L3.8 445.8c-3.8 11.3-1 23.9 7.3 32.4L164.7 324.7c-3-6.3-4.7-13.3-4.7-20.7c0-26.5 21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48c-7.4 0-14.4-1.7-20.7-4.7L33.7 500.9c8.6 8.3 21.1 11.2 32.4 7.3l264.3-88.6c19.7-6.6 35-22.4 41-42.3l43.2-144.1 2.8-9.2L288 94.6z"/>
							</svg>
						</span>
						Modifier Appartement
					</button>

					<button type="button" class="btn btn-delete btn-form-delete" data-section="appartement-delete">
						<span class="icon-content">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
							  <path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/>
							</svg>
						</span>
						Supprimer Appartement
					</button>
				</nav>
				<div class="data-container">
					<?php
					viewAppartement();
					?>
				</div>
				
				<fieldset class="form-delete" id="appartement-delete">
					<legend>Supprimer Appartement</legend>
					<form action="">
						<p class="warning">Attention</p>
						<p class="message">
							Etes-vous sur de vouloir supprimer l'appartement. <br>
							si vous le supprimer vous supprimer aussi les etat des lieux lier a ce dernier <br>
							ainsi que les contrats.
						</p>
						<?php
							echo notRequired('delete-appartement');
						?>
					</form>
				</fieldset>
			</section>

			<section class="appartement-data">
				<h3>Etat des lieux</h3>
				<nav>
					<button type="button" class="btn btn-add btn-form" data-section="etat-add">
						<span class="icon-content">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
								<path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
							</svg>
						</span>
						Ajouter Etat des lieux
					</button>
				</nav>
				<div class="data-container etat-container">
					<?php
						viewEtat();
					?>
				</div>
			</section>
		</section>
		<section class="appartement-container">
			<section class="appartement-data">
				<h3>Propriétaire appartement</h3>
				<nav>
					<button type="button" class="btn btn-add btn-form" data-section="proprietaire-add">
						<span class="icon-content">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
								<path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
							</svg>
						</span>
						Ajouter propriétaire
					</button>
				</nav>
				<div class="data-container">
					<?php
						viewProprio();
					?>
				</div>
			</section>

			<section class="appartement-data">
				<h3>Contrat</h3>
				<nav>
					<button type="button" class="btn btn-add btn-form" data-section="contrat-add">
						<span class="icon-content">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
								<path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
							</svg>
						</span>
						Ajouter contrat
					</button>
				</nav>
				<div class="data-container">
					<?php
						viewContrat();
					?>
				</div>
			</section>
		</section>
	</article>

	<fieldset class="form-view" id="appartement-update">
		<legend>Mise à jour appartement</legend>
		<button type="button" class="btn-close close" data-section="appartement-update">
				<span class="icon-content">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
						<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
					</svg>
				</span>
		</button>
		<form action="">
			<?php
			foreach ($inputs as $input) {
				$view =
					"
								<span class='important'>
									<label for='' class='required'>$input</label>
									<input type='text' placeholder='$input'>
								</span>
							";
				echo $view;
			}
			required();
			?>
		</form>
	</fieldset>

	<fieldset class="form-view" id="etat-add">
		<legend>Ajout Etat des lieux</legend>
		<button type="button" class="btn-close close" data-section="etat-add">
			<span class="icon-content">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
					<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
				</svg>
			</span>
		</button>
		<form action="">
			<span class="important">
				<label for="" class="required">Date de réalisation</label>
				<input type="date" name="" id="">
			</span>
			<span class="important">
				<label for="" class="required">Remarque</label>
				<textarea name="" id="" cols="30" rows="10" placeholder="Remarque"></textarea>
			</span>
			<?php
			required();
			?>
		</form>
	</fieldset>

	<fieldset class="form-view" id="proprietaire-add">
		<legend>Ajouter Propriétaire</legend>
		<button type="button" class="btn-close close" data-section="proprietaire-add">
			<span class="icon-content">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
					<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
				</svg>
			</span>
		</button>
		<form action="">
			<span class="important">
				<label for="" class="required">proprietaire</label>
				<?php
				selectProprietaire();
				?>
			</span>
			<?php
			required();
			?>
		</form>
	</fieldset>

	<fieldset class="form-view" id="contrat-add">
		<legend>Ajouter un contrat</legend>
		<button type="button" class="btn-close close" data-section="contrat-add">
			<span class="icon-content">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
					<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
				</svg>
			</span>
		</button>
		<form action="">
			<span class="important">
				<label for="" class="required">Date début</label>
				<input type="date" name="" id="">
			</span>
			<span class="important">
				<label for="" class="required">Date fin</label>
				<input type="date" name="" id="">
			</span>
			<span class="important">
				<label for="" class="required">locataire</label>
				<?php
				selectLocataire();
				?>
			</span>
			<?php
			required();
			?>
		</form>
	</fieldset>
</main>
<?php
include '../../controller/footer.html';
?>
</body>
</html>
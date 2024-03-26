<?php
include '../../controller/query.php';
global $etat_all;
$name = [
	'date réalisation',
	'remarque',
	'appartement adresse',
	'select'];

$inputs = [];
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../../style/style.css">
	<title>Etat</title>
</head>
<body>
<?php
	include '../../controller/navbar.html';
?>
<header class="page-header all">
	<h2>Gestion Etat</h2>
	<button type="button" class="btn btn-add btn-form" data-section="etat-add">
			<span class="icon-content">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
					<path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
				</svg>
			</span>
		Ajouter Etat
	</button>
</header>
<main class="etat">
	<section class="section-table" id="etat-table">
		<div class="table">
			<div class="table-content thead">
			<span class="ligne-content tr">
				<?php
				foreach ($name as $names) {
					$ligne = "
						<p class='th'>
							$names
						</p>";
					echo $ligne;
				}
				?>
			</span>
			</div>
			<div class="table-content tbody">
				<?php
				foreach ($etat_all as $data) {
					$creation = $data['creation'];
					$remarque = $data['remarque'];
					$adress = $data['adress'];
					
					$ligne_data = "
					<p class='td'>$creation</p>
					<p class='td'>$remarque</p>
					<p class='td'>$adress</p>
					<a href='#' class='td'>
						<span class='btn'>
							select
						</span>
					</a>
				";
					
					$ligne = "
					<span class='ligne-content tr'>
						$ligne_data
					</span>
				";
					
					echo $ligne;
				}
				?>
			</div>
		</div>

	</section>
	
	<section class="section-form" id="etat-add">
		<fieldset>
			<legend>Ajout etat</legend>
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
	</section>
</main>
<?php
include '../../controller/footer.html';
?>
</body>
</html>

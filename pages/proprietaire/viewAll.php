<?php
include '../../controller/query.php';
global  $proprietaire_all;

$name =[
	'nom',
	'prénom',
	'email',
	'adresse',
	'telephone',
	'select'
];

$inputs =[
	'nom',
	'prénom',
	'email',
	'adresse',
	'telephone',
];
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../../style/style.css">
	<title>Proprietaire</title>
</head>
<body>
<?php
include '../../controller/navbar.html';
?>
<header class="page-header all">
	<h2>Gestion Proprietaire</h2>
	<button type="button" class="btn btn-add btn-form" data-section="proprietaire-add">
			<span class="icon-content">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
					<path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
				</svg>
			</span>
		Ajouter Proprietaire
	</button>
</header>
<main class="proprietaire">
	<section class="section-table" id="proprietaire-table">
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
				foreach ($proprietaire_all as $data) {
					$name = $data['name'];
					$lastname = $data['lastname'];
					$email = $data['email'];
					$adress = $data['adress'];
					$phone = $data['phone'];
					
					$ligne_data = "
					<p class='td'>$name</p>
					<p class='td'>$lastname</p>
					<p class='td'>$email</p>
					<p class='td'>$adress</p>
					<p class='td'>$phone</p>
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
	
	<section class="section-form" id="proprietaire-add">
		<fieldset>
			<legend>Ajout proprietaire</legend>
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

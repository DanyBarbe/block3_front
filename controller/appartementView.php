<?php
include 'query.php';

function viewAppartement()
{
	global $appartement_selected;
	foreach ($appartement_selected as $data_appartement) {
		$code = $data_appartement['code'];
		$ville = $data_appartement['ville'];
		$adress = $data_appartement['adress'];
		$charge = $data_appartement['charge'];
		$garantie = $data_appartement['garantie'];
		$loyer = $data_appartement['loyer'];
		$etat = $data_appartement['etat'] ? "louer" : "non louer";
		
		$view = "
			<span class='data-content'>
				<p class='data-name'>code postal</p>
				<p>$code</p>
			</span>
			<span class='data-content'>
				<p class='data-name'>ville</p>
				<p>$ville</p>
			</span>
			<span class='data-content'>
				<p class='data-name'>adresse</p>
				<p>$adress</p>
			</span>
			<span class='data-content'>
				<p class='data-name'>charge</p>
				<p>$charge €</p>
			</span>
			<span class='data-content'>
				<p class='data-name'>garantie</p>
				<p>$garantie €</p>
			</span>
			<span class='data-content'>
				<p class='data-name'>loyer</p>
				<p>$loyer €</p>
			</span>
			<span class='data-content'>
				<p class='data-name'>etat de l'appartement</p>
				<p>$etat</p>
			</span>
		";
		echo $view;
	}
}

function viewEtat()
{
	global $etat_selected;
	foreach ($etat_selected as $data_etat) {
		$creation = $data_etat['creation'];
		$remarque = $data_etat['remarque'];
		
		$view = "
			<section class='data-folder'>
				<div>
					<span class='data-content'>
						<p class='data-name'>date de realisation</p>
						<p>$creation</p>
					</span>
					<span class='data-content'>
						<p class='data-name'>remarque</p>
						<p class='etat-remarque'>$remarque</p>
					</span>
				</div>
				<span>
					<button class='btn btn-view btn-delete'>
						<span class='icon-content'>
							<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>
								<path d='M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z'/>
							</svg>
						</span>
					</button>
				</span>
			</section>
		";
		
		echo $view;
	}
}

function viewProprio()
{
	global $gestionProprio_selected;
	foreach ($gestionProprio_selected as $data_proprio) {
		$name = $data_proprio['name'];
		$lastname = $data_proprio['lastname'];
		$email = $data_proprio['email'];
		$adress = $data_proprio['adress'];
		$phone = $data_proprio['phone'];
		
		$view = "
			<section class='data-folder'>
				<div>
					<span class='data-content'>
						<p class='data-name'>prénom</p>
						<p>$name</p>
					</span>
					<span class='data-content'>
						<p class='data-name'>nom</p>
						<p>$lastname</p>
					</span>
					<span class='data-content'>
						<p class='data-name'>email</p>
						<p>$email</p>
					</span>
					<span class='data-content'>
						<p class='data-name'>adresse</p>
						<p>$adress</p>
					</span>
					<span class='data-content'>
						<p class='data-name'>téléphone</p>
						<p>$phone</p>
					</span>
				</div>
		
				<span>
					<button class='btn btn-view btn-delete'>
							<span class='icon-content'>
							<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'>
							  <path d='M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z'/>
							</svg>
						</span>
					</button>
				</span>
			</section>
		";
		
		echo $view;
	}
}

function viewContrat()
{
	global $contrat_selected;
	foreach ($contrat_selected as $data_contrat) {
		$debut = $data_contrat['debut'];
		$fin = $data_contrat['fin'];
		$name = $data_contrat['name'];
		$lastname = $data_contrat['lastname'];
		$email = $data_contrat['email'];
		$adress = $data_contrat['adress'];
		$phone = $data_contrat['phone'];
		$apl = $data_contrat['apl'] ? 'paye avec les apl' : 'ne paye pas avec les apl';
		$apl_value = $data_contrat['apl_value'];
		
		$view = "
			<section class='data-folder'>
				<div>
					<span class='data-content'>
						<p class='data-name'>date</p>
						<p> $debut / $fin</p>
					</span>
					<span class='data-content'>
						<p class='data-name'>prénom</p>
						<p>$name</p>
					</span>
					<span class='data-content'>
						<p class='data-name'>nom</p>
						<p>$lastname</p>
					</span>
					<span class='data-content'>
						<p class='data-name'>email</p>
						<p>$email</p>
					</span>
					<span class='data-content'>
						<p class='data-name'>adresse</p>
						<p>$adress</p>
					</span>
					<span class='data-content'>
						<p class='data-name'>téléphone</p>
						<p>$phone</p>
					</span>
					<span class='data-content'>
						<p class='data-name'>APL</p>
						<p>$apl</p>
					</span>
				
					<span class='data-content'>
						<p class='data-name'>valeur APL</p>
						<p>$apl_value</p>
					</span>
				</div>
			</section>
		";
		
		echo $view;
	}
}
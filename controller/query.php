<?php
include 'form-button.php';

include 'bdd_connect.php';

global $bdd;
$id = 2;

$appartement_all = $bdd->query('select * from appartement');

$appartement_selected = $bdd->prepare('select * from appartement where id=?');
$gestionProprio_selected = $bdd->prepare('select * From gestion_proprio g join proprietaire p on p.id = g.proprietaire_id join appartement a on a.id = g.appartement_id where appartement_id = ?');
$contrat_selected = $bdd->prepare('Select * From contrat c join locataire l on l.id = c.locataire_id join appartement a on a.id = c.appartement_id where appartement_id = ?');
$etat_selected = $bdd->prepare('select * from etat where appartement_id = ?');

$appartement_selected->execute([$id]);
$gestionProprio_selected->execute([$id]);
$contrat_selected->execute([$id]);
$etat_selected->execute([$id]);

$proprietaire_all = $bdd->query('SELECT * FROM proprietaire');
$locataire_all = $bdd->query('SELECT * FROM locataire');
$etat_all = $bdd->query('SELECT * from etat join appartement');
$contrat_all = $bdd->query('select * from contrat c join locataire l on l.id = c.locataire_id join appartement a on a.id = c.appartement_id');
$paiement_all = $bdd->query('select * from paiement p');
$etat_all = $bdd->query('select * from etat e join appartement a on e.appartement_id = a.id');

function selectProprietaire(){
	global $bdd;
	$proprietaire_email = $bdd->query('select email from proprietaire');
	$select = "
		<select>
	";
	foreach ($proprietaire_email as $data){
		$email = $data['email'];
		$select .="
			<option>
				$email
			</option>
		";
	}
	$select .= "
		</select>
	";
	echo $select;
}

function selectLocataire(){
	global $bdd;
	$locataire_email = $bdd->query('select email from locataire');
	$select = "
		<select>
	";
	foreach ($locataire_email as $data){
		$email = $data['email'];
		$select .="
			<option>
				$email
			</option>
		";
	}
	$select .= "
		</select>
	";
	echo $select;
}

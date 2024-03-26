<?php
$host = 'localhost';
$dbname = 'examV4';
$username = 'root';
$password = '';

try {
	$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", "$username", "$password");
} catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}
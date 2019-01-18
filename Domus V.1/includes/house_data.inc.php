<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$adresse = $_POST['adresse'];
$superficie = $_POST['superficie'];
$nb_piece = $_POST['nb_piece'];
$nb_personne = $_POST['nb_personne'];

$req = $bdd->prepare('INSERT INTO house (adresse, superficie, nb_piece, nb_personne) VALUES(:adresse, :superficie, :nb_piece, :nb_personne)');

$req->execute(array(
	'adresse' => $adresse,
	'superficie' => $superficie,
	'nb_piece' => $nb_piece,
	'nb_personne' => $nb_personne
	));

header('Location: ../php/house_data.php');
?>
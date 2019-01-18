<?php

session_start();

// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if(isset($_SESSION['userId']))
{
	$userId = $_SESSION['userId'];
	$name = $_POST['houseName'];
	$adresse = $_POST['adressHouse'];
	$superficie = $_POST['areaHouse'];
	$nb_piece = $_POST['roomTotalNb'];
	$nb_personne = $_POST['personNb'];
	$req = $bdd->prepare('INSERT INTO houses (idUsers, nameHouses, adressHouses, areaHouses, roomTotalNbHouses, personNbHouses) VALUES(:userId, :houseName, :adresse, :superficie, :nb_piece, :nb_personne)');

	$req->execute(array(
		'userId' => $userId,
		'houseName' => $name,
		'adresse' => $adresse,
		'superficie' => $superficie,
		'nb_piece' => $nb_piece,
		'nb_personne' => $nb_personne
		));
}

header('Location: ../php/display_house.php');
?>
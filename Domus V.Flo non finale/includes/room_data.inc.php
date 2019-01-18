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
	$idHouse = $_SESSION['idHouse'];
	$name = $_POST['nameRoom'];
	$sensorNb = $_POST['sensorNbRoom'];
	$type = $_POST['typeRoom'];
	
	$req = $bdd->prepare('INSERT INTO rooms (idHouse, type, name, sensorNb) VALUES(:idHouse, :type, :name, :sensorNb)');

	$req->execute(array(
		'idHouse' => $idHouse,
		'type' => $type,
		'name' => $name,
		'sensorNb' => $sensorNb
		));
}

header('Location: ../php/room_data.php');
?>
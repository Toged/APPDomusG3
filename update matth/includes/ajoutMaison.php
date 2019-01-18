<?php
// Connexion à la base de données
session_start();
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$idUsers=$_SESSION['userId'];
$name=$_POST['name'];
$adress = $_POST['adress'];
$area = $_POST['area'];
$nbRoom = $_POST['nbRoom'];
$nbPerson = $_POST['nbPerson'];
$req = $bdd->prepare('INSERT INTO houses (idUsers,name,adressHouses,areaHouses,roomTotalNbHouses,personNbHouses) VALUES(:idUsers,:name,:adress,:area,:nbRoom,:nbPerson)');

$req->execute(array(
	'idUsers' => $idUsers,
	'name' => $name,
	'adress' => $adress,
	'area' => $area,
	'nbRoom' => $nbRoom,
	'nbPerson' => $nbPerson,
));
header('Location: ../php/houseclient.php');
?>
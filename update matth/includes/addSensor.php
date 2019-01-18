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
$idRoom=$_SESSION['idRoom'];
$type=$_POST['type'];
$donnee = $_POST['donnee'];
$req = $bdd->prepare('INSERT INTO sensor (idRoom,type,donnee) VALUES(:idRoom,:type,:donnee)');

$req->execute(array(
	'idRoom' => $idRoom,
	'type' => $type,
	'donnee' => $donnee,
));
header('Location: ../php/sensorclient.php');
?>
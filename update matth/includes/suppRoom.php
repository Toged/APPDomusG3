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
if(isset($_POST['nameRoom'])){
$nameRoom=$_POST['nameRoom'];
$id=$_SESSION['idHouse'];
$sql = "DELETE FROM rooms WHERE name=:nameRoom AND idHouse=$id";
$query = $bdd->prepare($sql);
$query->bindValue(':nameRoom',$nameRoom,PDO::PARAM_STR);
$query->execute();
}
header('Location: ../php/room_data.php');
?>
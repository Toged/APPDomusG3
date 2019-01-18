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
if(isset($_POST['type'])){
$type=$_POST['type'];
$id=$_SESSION['idRoom'];
$sql = "DELETE FROM sensor WHERE type=:type AND idRoom=$id ";
$query = $bdd->prepare($sql);
$query->bindValue(':type',$type,PDO::PARAM_STR);
$query->execute();
}
header('Location: ../php/sensorclient.php');
?>
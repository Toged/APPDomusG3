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
if(isset($_POST['houseName'])){
$houseName=$_POST['houseName'];
$id=$_SESSION['userId'];
$sql = "DELETE FROM houses WHERE nameHouses=:houseName AND idUsers=$id";
$query = $bdd->prepare($sql);
$query->bindValue(':houseName',$houseName,PDO::PARAM_STR);
$query->execute();
}
header('Location: ../php/display_house.php');
?>
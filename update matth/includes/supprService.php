<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if(isset($_POST['title2Suppr'])){
$title2Suppr=$_POST['title2Suppr'];
$sql = "DELETE FROM service WHERE title2=:title2Suppr";
$query = $bdd->prepare($sql);
$query->bindValue(':title2Suppr',$title2Suppr,PDO::PARAM_STR);
$query->execute();
}
header('Location: ../php/modifService.php');
?>
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
if(isset($_POST['name'])){
$name=$_POST['name'];
$sql = "DELETE FROM houses WHERE name=:name";
$query = $bdd->prepare($sql);
$query->bindValue(':name',$name,PDO::PARAM_STR);
$query->execute();
}
header('Location: ../php/houseclient.php');
?>
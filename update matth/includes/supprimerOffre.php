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
if(isset($_POST['titleSuppr'])){
$titleSuppr=$_POST['titleSuppr'];
$sql = "DELETE FROM offer WHERE title=:titleSuppr";
$query = $bdd->prepare($sql);
$query->bindValue(':titleSuppr',$titleSuppr,PDO::PARAM_STR);
$query->execute();
}
header('Location: ../php/modifOffre.php');
?>
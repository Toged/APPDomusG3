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
$title1 = $_POST['title1Ajout'];
$title2 = $_POST['title2Ajout'];
$commentaire = $_POST['commentaire'];

$req = $bdd->prepare('INSERT INTO service (title1,title2,texte) VALUES(:title1,:title2,:commentaire)');

$req->execute(array(
	'title1' => $title1,
	'title2' => $title2,
	'commentaire' => $commentaire,
));
header('Location: ../php/modifService.php');
?>
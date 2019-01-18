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
$title = $_POST['titleAjout'];
$commentaire = $_POST['commentaire'];
$image = $_POST['image'];

$req = $bdd->prepare('INSERT INTO offer (title,texte,image) VALUES(:title,:commentaire,:image)');

$req->execute(array(
	'title' => $title,
	'commentaire' => $commentaire,
	'image' => $image,
));
header('Location: ../php/modifOffre.php');
?>
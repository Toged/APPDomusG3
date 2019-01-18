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

if (isset($_POST['question']) && isset($_POST['reponse'])) {
	$question = $_POST['question'];
	$reponse = $_POST['reponse'];

$req = $bdd->prepare('INSERT INTO faq (question,reponse) VALUES(:question,:reponse)');

$req->execute(array(
	'question' => $question,
	'reponse' => $reponse,
	));
}
header('Location: FAQ.php');
?>
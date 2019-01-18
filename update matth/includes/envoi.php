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
$email = $_POST['email'];
$message = $_POST['message'];

$req = $bdd->prepare("INSERT INTO assistance (emailUsers,message,isRead) VALUES(:email,:message,'false')");

$req->execute(array(
	'email' => $email,
	'message' => $message,
	));

session_start();
if(isset($_POST['message']) && isset($_POST['email']))
{
	$_SESSION['succes']="Message envoyé avec succès";
}
header('Location: ../php/assistance.php');
?>
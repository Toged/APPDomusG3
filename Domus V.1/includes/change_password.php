<?php 
	session_start();

	//connexion db 
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');
	}
	catch (Exception $e)
	{
	    die('Erreur : ' . $e->getMessage());
	}


	//On modifie l'ancien mdp de l'utilisateur par le nouveau. 

	$oldPwd = $_POST['opwd'];
	$newPwd = $_POST['npwd'];
	$userId = $_SESSION['userId'];
	$hashedPwd = password_hash($newPwd, PASSWORD_DEFAULT);
	

	$query=$db->prepare("UPDATE users SET pwdUsers=:mdp WHERE idUsers=:id");
	$query->bindValue(':mdp',$hashedPwd ,PDO::PARAM_INT);
	$query->bindValue(':id',$userId,PDO::PARAM_INT);
	$query->execute();
	header("Location: ../php/accueil.php");
	exit();

?>

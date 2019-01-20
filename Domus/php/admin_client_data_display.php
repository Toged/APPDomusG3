﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Accueil Domus</title>
		<link rel="stylesheet" type="text/css" href="../css/accueil_admin.css">
		<link rel="stylesheet" href="../css/header_admin.css">
		<link rel="stylesheet" href="../css/footer.css">
		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../scripts/accueil.js"></script>
		<script src="../scripts/header.js"></script>

	</head>
	<?php include("../includes/header_admin.php"); ?>
	<body>
		<form class="client">
			<input type="text" name="recherche" placeholder="Taper un nom à rechercher">
		</form>
		<?php readName()?>
	</body>
	<?php include("../includes/footer.php"); ?>
</html>

<?php
function readName()
{
	include("../includes/DBconnexion.php");
	//testetstes
	if(isset($_GET['recherche']))
	{
		$clients=$_GET['recherche'];
		$query=$db->prepare("SELECT * FROM users WHERE uidUsers=:client");
		$query->bindValue(':client',$clients,PDO::PARAM_STR);
		$query->execute();
		while($client=$query->fetch())
		{
			echo '<p>Pseudo :</p>'.$client['uidUsers'].'</br>'.'<p>Numéro de téléphone :</p>'.$client['phoneNbUsers'].'</br>'.'<p>Adresse mail :</p>'.$client['emailUsers'] .'</br>'.'<p>Adresse :</p>'.$client['adressUsers'].'</br>'.'<p>Prénom :</p>'.$client['firstNameUsers'].'</br>'.'<p>Nom :</p>'.$client['lastNameUsers'].'</br>'.'<p>Numéro offre :</p>'.$client['offersUsers'];
		}
	}
	else
	{
		$query=$db->query("SELECT * FROM users");
		while($client=$query->fetch()){
			echo $client['uidUsers'].'</br>';
		}
	}
}
?>
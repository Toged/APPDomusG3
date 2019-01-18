<!DOCTYPE html>
<!-- Header avec Se Connecter-->
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Espace Client</title>
		<link rel="stylesheet" type="text/css" href="../css/offres.css">
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../script/header.js"></script>
	</head>
	<?php include("../includes/header.php"); ?>
	<body>
		<div class="offres">
		<h2>Notre entreprise vous propose ces différentes offres domotiques</h2>
		<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
       		die('Erreur : '.$e->getMessage());
		}
		$query=$bdd->query("SELECT * FROM offer");
		while($offer=$query->fetch()){
			if($offer['image']==""){
				echo '<div class="offre"><div class="texte"><h3>'.$offer['title'].'</h3>'.'<p>'.$offer['texte'].'</p></div></div>';
			}
			else{
				echo '<div class="offre"><img src="'.$offer['image'].'"><div class="texte"><h3>'.$offer['title'].'</h3>'.'<p>'.$offer['texte'].'</p></div></div>';
			}
			
		}
		?></div>
	</body>
	<?php include("../includes/footer.php"); ?>
</html>
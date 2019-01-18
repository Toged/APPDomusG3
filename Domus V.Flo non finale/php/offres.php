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
		<h2>Notre entreprise vous propose 3 offres domotiques</h2>
		<h3>Basique</h3>
		<p>Notre première offre est la mions onéreuse, elle vous donne accès aux fonctionnalités de base du système. Elle permet de gérer la température, l'ouverture des volets et la présence d'un système de sécurité</p>
		<!--<div class="offre_image">
			<img src="../images/temperature.png">
			<img src="../images/volet.png">
			<img src="../images/secur.png">
		</div>-->
		<h3>Complete</h3>
		<p>Notre deuxième offre permet d'avoir accès en plus à un système de gestion d'énergie pour pouvoir voir et gérer les consommations</p>
		<div class="offre_image1">
			<img src="../images/consommation.png">
		</div>
		<h3>Prenium</h3>
		<p>Notre dernière offre inclut la possibilité que la maison gère sans en demander l'avis la maison</p>
		</div>
	</body>
	<?php include("../includes/footer.php"); ?>
</html>
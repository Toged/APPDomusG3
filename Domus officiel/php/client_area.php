
<!DOCTYPE html>
<!-- Header avec Se Connecter-->
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Espace Client</title>
		<link rel="stylesheet" type="text/css" href="../css/espace_client.css">
		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../script/header.js"></script>
	</head>
	<?php include("../includes/header.php"); ?>
	<body>
		<div class="container">
			<div class="block1"><a href="../php/client_houses.php">Maison</a></div>
			<div class="block2"><a href="../php/alertes.php">Alertes</a></div>
			<div class="block3">Gestion d'énergie</div>
		</div>
		<div class="container2">
			<div class="block4">Sécurité</div>
			<div class="block5">Assistance</div>
			<div class="block6">Mon Profil</div>
		</div>

	</body>
	<?php include("../includes/footer.php"); ?>
</html>
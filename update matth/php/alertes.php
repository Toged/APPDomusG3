<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Alertes</title>
		<link rel="stylesheet" type="text/css" href="../css/alertes.css">
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="header_V.1.js"></script>
	</head>
	<?php include("../includes/header.php"); ?>

	<body>
		<h1>Alertes</h1>
		<h2>Veuillez sélectionner les capteurs pour les différentes pièces de votre habitat :</h2>
			<div>
				<form  action="#" method="post">
					<select name="Style" style="margin-left: 800px; margin:20; padding:20;font-size:1.55em;box-sizing:border-box; width:300px; height:35px; ">
   						<?php
      					try
      					{
       						$bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
      					}
      					catch(Exception $e)
      					{
        				    die('Erreur : '.$e->getMessage());
      					}
      					$query=$bdd->query("SELECT * FROM piece");
      					while($piece=$query->fetch()){
        					echo '<option>'.$piece['name'].'</option>';
      					}
      				?>
					</select></br>
					<input type="checkbox" name="Capteur de présence" id="Capteur de présence" style="margin-top:25px; width:20px; height:20px" />
					<label for="Capteur de présence">Capteur de présence</label></br>
					<input type="checkbox" name="Capteur de température" id="Capteur de température" style="margin-top:10px; width:20px; height:20px"/>
					<label for="Capteur de température">Capteur de température</label></br>
					<input type="checkbox" name="Capteur de luminosité" id="Capteur de luminosité" style="margin-top:10px; width:20px; height:20px"/>
					<label for="Capteur de luminosité">Capteur de luminosité</label></br>
					<input type="checkbox" name="Capteur de fumée" id="Capteur de fumée" style="margin-top:10px; width:20px; height:20px"/>
					<label for="Capteur de fumée">Capteur de fumée</label></br>
					<input type="checkbox" name="Capteur de CO2" id="Capteur de CO2" style="margin-top:10px; width:20px; height:20px"/>
					<label for="Capteur de CO2">Capteur de CO2</label></br>
					<input type="checkbox" name="Capteur d'humidité" id="Capteur d'humidité" style="margin-top:10px; width:20px; height:20px"/>
					<label for="Capteur d'humidité">Capteur d'humidité</label></br>
					<input type="checkbox" name="Caméra" id="Caméra" style="margin-top:10px; width:20px; height:20px"/>
					<label for="Caméra">Caméra</label></br>
					<input type="submit" name="envoyer" value="Envoyer" style="font-size: 17.5px">
					<label for="envoyer"></label></br>
				</form>
			</div>
	</body>

	<?php include("../includes/footer.php"); ?>s
</html>
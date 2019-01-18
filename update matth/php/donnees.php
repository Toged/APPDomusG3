<!DOCTYPE html>
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
		<script src="../script/header.js"></script>

	</head>
	<?php include("../includes/header_admin.php"); ?>
	<body>
		<p> Tous les messages non lu </p>
		<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
        	die('Erreur : '.$e->getMessage());
		}
		$messages= $bdd->query("SELECT * FROM assistance WHERE isRead='false'");
		while($message=$messages->fetch()){
			$idMessage=$message['idMessage'];
			echo '<h3>'.$message['emailUsers'].'</h3>'.'<a href="../includes/afficherMessage.php?idMessage='.$idMessage.'"\'><input type="checkbox" name="choix" /></a></br><p>'.$message['message'].'</p></br>';
		}	
		?>
	</body>
	<?php include("../includes/footer.php"); ?>
</html>
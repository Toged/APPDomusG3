<!DOCTYPE html>
<!-- Header avec Se Connecter-->
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Assistance</title>
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/assistancet.css">
		<link rel="stylesheet" type="text/css" href="../css/footer.css">
		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../script/accueil.js"></script>
		<script src="../script/header.js"></script>
	</head>
	<?php include("../includes/header.php"); ?>
	<body>
		<?php
			try
			{
   				$bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
			}
			catch(Exception $e)
			{
        		die('Erreur : '.$e->getMessage());
			}

			$rep=$bdd->query('SELECT topic,time FROM forum');
			while($donnees=$rep->fetch()){
				echo '<p><strong>' . htmlspecialchars($donnees['topic']) . '</strong> : ' . htmlspecialchars($donnees['time']) . '</p>';
			}
			$rep->closeCursor();
		?>



		
		<?php
			try
			{
   				$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
			}
			catch(Exception $e)
			{
        		die('Erreur : '.$e->getMessage());
			}

			$rep=$bdd->query('SELECT * FROM forum');
			while($donnees=$rep->fetch()){
				echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
			}
			$rep->closeCursor();
		?>
		<p>Bienvenue sur notre forum</p>
		<p>Ajoutez un topic ?</p>
		<form method="post" action="../includes/topic.php">
			<label for="topic"> </label>: <input type="text" name="topic" id="topic" required/>
		</form>
		<p>Ajoutez un commentaire ?</p>
		<form method="post" action="../includes/ajoutCommentaire.php">
			<label for="pseudo"> </label>: <input type="text" name="pseudo" id="pseudo" required/><br/>
			<p>Votre message<p>
			<textarea type="text" name="message" id="message" rows="20" cols="70"></textarea></br>
			<input type="submit" value="Envoyer"></br>
		</form>
	</body>
</html>
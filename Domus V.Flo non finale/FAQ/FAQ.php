<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/reset_FAQ.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/FAQ.css"> <!-- Resource style -->
	<title>G3C</title>
</head>
<body>
	<header>
		<h1>FAQ</h1>
	</header>
	<img src="faq_img.jpg" align="center">
	<section class="cd-faq">
		<div class="cd-faq-items">
			<ul id="basics" class="cd-faq-group">
				<?php readQuestion(); ?>
			</ul>
		</div>
		<section class="textarea">
			<form action="FAQ.inc.php" method="post">
				<label for = 'question'> Posez-nous votre question! </label>
				<br>
				<textarea name="question" id="question" rows="8" cols="45"></textarea>
				<br>
				<br>
				<label for = 'reponse'> Entrez votre réponse </label>
				<br>
				<textarea name="reponse" id="reponse" rows="8" cols="45"></textarea>
				<br>
				<br>
				<input type="submit" value="Valider" />
			</form>
		</section>

		<?php

		function readQuestion() {
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
			}
			catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
			}
			$req=$bdd -> query("SELECT Question, reponse FROM faq");
			
			while( $data = $req -> fetch() )
			{
				echo '<li>
				<a class="cd-faq-trigger" href="#0">'. $data['Question']. '</a>
				<div class="cd-faq-content"> 
				<p>'. $data['reponse']. '</p>
				</div> 
				</li>';
			}
			$req->closeCursor();
		}
		
		?>
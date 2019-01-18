<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/reset_FAQ.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style_FAQ.css"> <!-- Resource style -->
	<title>G3C</title>
</head>
<body>
<header>
	<h1>FAQ</h1>
</header>
<section class="cd-faq">
	<div class="cd-faq-items">
		<ul id="basics" class="cd-faq-group">
			<li>
				<a class="cd-faq-trigger" href="#0">? Question 1 ?</a>
				<div class="cd-faq-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non a ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et. Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem! Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem atque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.</p>
				</div> <!-- cd-faq-content -->
			</li>
			<li>
				<a class="cd-faq-trigger" href="#0">? Question 2 ?</a>
				<div class="cd-faq-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cupiditate et laudantium esse adipisci consequatur modi possimus accusantium vero atque excepturi nobis in doloremque repudiandae soluta non minus dolore voluptatem enim reiciendis officia voluptates, fuga ullam? Voluptas reiciendis cumque molestiae unde numquam similique quas doloremque non, perferendis doloribus necessitatibus itaque dolorem quam officia atque perspiciatis dolore laudantium dolor voluptatem eligendi? Aliquam nulla unde voluptatum molestiae, eos fugit ullam, consequuntur, saepe voluptas quaerat deleniti. Repellendus magni sint temporibus, accusantium rem commodi?</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">? Question 3 ?</a>
				<div class="cd-faq-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cupiditate et laudantium esse adipisci consequatur modi possimus accusantium vero atque excepturi nobis in doloremque repudiandae soluta non minus dolore voluptatem enim reiciendis officia voluptates, fuga ullam? Voluptas reiciendis cumque molestiae unde numquam similique quas doloremque non, perferendis doloribus necessitatibus itaque dolorem quam officia atque perspiciatis dolore laudantium dolor voluptatem eligendi? Aliquam nulla unde voluptatum molestiae, eos fugit ullam, consequuntur, saepe voluptas quaerat deleniti. Repellendus magni sint temporibus, accusantium rem commodi?</p>
				</div> <!-- cd-faq-content -->
			</li>
			<li>
				<a class="cd-faq-trigger" href="#0">? Question 4 ?</a>
				<div class="cd-faq-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cupiditate et laudantium esse adipisci consequatur modi possimus accusantium vero atque excepturi nobis in doloremque repudiandae soluta non minus dolore voluptatem enim reiciendis officia voluptates, fuga ullam? Voluptas reiciendis cumque molestiae unde numquam similique quas doloremque non, perferendis doloribus necessitatibus itaque dolorem quam officia atque perspiciatis dolore laudantium dolor voluptatem eligendi? Aliquam nulla unde voluptatum molestiae, eos fugit ullam, consequuntur, saepe voluptas quaerat deleniti. Repellendus magni sint temporibus, accusantium rem commodi?</p>
				</div> <!-- cd-faq-content -->
			</li>
			<?php insertNewQuestion(); ?>
			<?php if (isset($_POST['message'])) { ?> 
			<li>
				<a class="cd-faq-trigger" href="#0"> <?php readQuestion(); ?> </a>
				<div class='cd-faq-content'>
					<p>Nous vous répondrons dans les plus brefs délais</p>
				</div> <!-- cd-faq-content -->
			</li>
			<?php } ?>
		</ul> <!-- cd-faq-group -->
	</div> <!-- cd-faq-items -->
</section> <!-- cd-faq -->
<section class="textarea">
<form action="FAQ.php" method="post">
	<textarea name="message" id="renseignement" rows="8" cols="45"></textarea>
	<input type="submit" value="Valider" />
</form>
</section>
<?php
function insertNewQuestion() {
if (isset($_POST['message'])) {
	$message = $_POST['message'];
	$bdd = new PDO('mysql:host=localhost;dbname=faq;charset=utf8', 'root', '');
	$bdd -> exec("INSERT INTO faq VALUES('','$message','! Reponse 5 !')");
	}
}
?>
<?php
function readQuestion() {
$bdd = new PDO('mysql:host=localhost;dbname=faq;charset=utf8', 'root', '');
$req=$bdd -> query("SELECT Question FROM faq WHERE idQuestion > 4");

while( $data = $req -> fetch() )
{
        echo $data['Question'].'<br>';
}
$req->closeCursor();
}
?>
</body>
</html>
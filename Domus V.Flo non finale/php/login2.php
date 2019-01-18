
<!DOCTYPE html>
<html>
	<head>
		<meta charset="uft-8">
		<link rel="stylesheet" type="text/css" href="../css/style_ft_login.css">
		<link rel="stylesheet" type="text/css" href="../css/login2.css">
		<link rel="stylesheet" type="text/css" href="../css/header.css">

		<script type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../scripts/header.js"></script>
		<title>Se Connecter</title>
	</head>

	<?php  
	
	require "../includes/header.php";

	?>


	<body>

		<div class="form">
			<?php
				if (isset($_SESSION['userId'])) {
						echo '<h4>Indiquez votre Email ou votre Username </h4>
						<form class="form_login" action="logout.inc.php" method="post"></br>
						<h4>Indiquez votre mot de passe </h4>
				<button type="submit"  name="logout-submit">Logout</button></form></br>';
						echo '<p class="login-status">Vous etes connecté!</p>';
				}
				else{
					echo '<form action="login.inc.php" method="post">
				<input type="text" name="mailuid" placeholder="Username/E-mail..">
				<input type="password" name="pwd" placeholder="Password..">
				<button class="login_button" type="submit"  name="login-submit">Login</button>
				</form>
				<a href="#">J ai oublié mon mot de passe</a>
				<a href="signup.php">Sign up</a>';
				}

			?>
			
					
		</div>
		

	</body>
</html>
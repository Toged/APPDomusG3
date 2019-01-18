<?php  
	
	require "login.php";
?>

	<main>
		<div class="wrapper-main">

			<section class="section-default">
				<?php
				if (isset($_SESSION['userId'])) {
					echo '<p class="login-status">Vous etes deconnecte!</p>';
				}
				else{
					echo '<p class="login-status">Vous etes connecte!</p>';
					echo '<form class="form_login" action="../includes/logout.inc.php" method="post">
				<button type="submit"  name="logout-submit">Logout</button></form>';
				}

				?>

				
				

			</section>
		</div>
		

	</main>
<header>
	<div class="container">
		<nav class="ordinateur">
			<a href="../php/accueil.php"><img src="../images/logo_domus_blanc.png" alt="logo" class="logo"></a>
			<ul>
				<li class="active"><a href="../php/accueil_admin.php">Accueil-Administrateur</a></li>
				<li ><?php if(isset($_SESSION['userId'])){
					echo '<a href="../includes/logout.inc.php">Se Déconnecter</a>';
				}else{
					echo '<a href="../includes/login.php">Se Connecter</a>';
				}?></li>
			</ul>

		</nav>
		<nav class="mobile">
			<div class="bar-btn">
				<img src="../images/menu32.png" class="menu">
				<img src="../images/close-cross32.png" class="close">
			</div>
			<ul>
				<li class="active"><a href="#">Accueil</a></li>
				<li><a href="#">Nos Offres</a></li>
				<li><a href="#">Nos Services</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Se Connecter</a></li>
			</ul>
		</nav>
	</div>
</header>

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
      $query=$bdd->query("SELECT * FROM houses");
      while($house=$query->fetch()){
        echo '<h3>'.'<a href="../includes/test.php">'.$house['name'].'</a>'.'</h3>'.'<p>'.$house['adressHouses'].'</p>'.'<p>'.$house['areaHouses'].'</p>'.'<p>'.$house['roomTotalNbHouses'].'</p>';
        echo $_SESSION['idHouse'];
      }
      ?>
     <p>Voulez-vous ajouter une maison ?</p>
    <form class="ajout" action="../includes/ajoutMaison.php" method="post">
    	<input type="text" name="name" placeholder="name"></br>
      <input type="text" name="adress" placeholder="adress"></br>
      <input type="number" name="area" placeholder="area"></br>
      <input type="number" name="nbRoom" placeholder="nbRoom"></br>
      <input type="number" name="nbPerson" placeholder="nbPerson"></br>
      <input type="submit" value="Appliquer"></br>
    </form>
    <p>Voulez-vous supprimer une maison ?</p>
    <form class="ajout" action="../includes/supprMaison.php" method="post">
      <input type="text" name="name" placeholder="name"></br>
      <input type="submit" value="Appliquer"></br>
    </form>
	</body>
	<?php include("../includes/footer.php"); ?>
</html>
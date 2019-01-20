<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Domotique G3C</title>
<link rel="stylesheet" type="text/css" href="../css/header.css">
<link rel="stylesheet" type="text/css" href="../css/footer.css">
<script type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../scripts/header.js"></script>
</head>

<?php include("../includes/header.php"); ?>

<body>
<!--Environnement-->
<section  id="environnement">
    <h2>ENVIRONNEMENT</h2>
      <?php
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
          die('Erreur : '.$e->getMessage());
      }
      $query=$bdd->query("SELECT * FROM service WHERE title1='environnement'");
      while($service=$query->fetch()){
        echo '<h3>'.$service['title2'].'</h3>'.'<p>'.$service['texte'].'</p>';
      }
      ?>
</section>
<section  id="securite">
    <h2>SECURITE</h2>
      <?php
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
          die('Erreur : '.$e->getMessage());
      }
      $query=$bdd->query("SELECT * FROM service WHERE title1='securite'");
      while($service=$query->fetch()){
        echo '<h3>'.$service['title2'].'</h3>'.'<p>'.$service['texte'].'</p>';
      }
      ?>
</section>
<section  id="confort">
    <h2>CONFORT</h2>
      <?php
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
          die('Erreur : '.$e->getMessage());
      }
      $query=$bdd->query("SELECT * FROM service WHERE title1='confort'");
      while($service=$query->fetch()){
        echo '<h3>'.$service['title2'].'</h3>'.'<p>'.$service['texte'].'</p>';
      }
      ?>
</section>
<p>Voulez-vous ajouter un service ?</p>
    <form class="ajout" action="../includes/add_service.php" method="post">
      <input type="text" name="title1Ajout" placeholder="Titre dans lequel insérer"></br>
      <input type="text" name="title2Ajout" placeholder="Titre"></br>
      <textarea type="text" name="commentaire" id="commentaire" rows="5" cols="70"></textarea></br>
      <input type="submit" value="Appliquer"></br>
    </form>
    <p>Voulez-vous supprimer un service ?</p>
    <form class="ajout" action="../includes/delete_service.php" method="post">
      <input type="text" name="title2Suppr" placeholder="Titre"></br>
      <input type="submit" value="Appliquer"></br>
    </form>
<?php include("../includes/footer.php"); ?>
</body>
</html>
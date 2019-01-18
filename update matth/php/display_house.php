<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Definition maison</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/display_house.css">
    <script type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../script/header.js"></script>
</head>
<?php include("../includes/header.php"); ?>

<body>
    <div class="house_data">
        <h1>Vos habitations </h1> <br /> 
        <div class="MAISON"> 
            <?php displayHouse() ?>
        </div>
        <div class="modif_maison">
        <div class="ajout_maison">
        <h1>Ajoutez une habitation </h1> <br />
        <form action="../includes/house_data.inc.php" method="post">

                <label for="name">Définir le nom de l'habitation </label> : <input type="text" name="houseName" id="name" /><br />
           
                <label for="adress">Adresse</label> : <input type="text" name="adressHouse" id="adresse" /><br /> 

                <label for="areaHouse">Superficie</label> : <input type="number" name="areaHouse" id="areaHouse" /><br />

                <label for="roomTotalNb">Nombre de pièce</label> : <input type="text" name="roomTotalNb" id="roomTotalNb" /><br /> 

                <label for="personNb">Nombre de personne</label> : <input type="number" name="personNb" id="personNb" /><br /> <br />

                <input type="submit" value="Appliquer" />
        </form>
        </div>
        <div class="supprimer_maison">
        <h1>Supprimez une habitation</h1></br>
        <form action="../includes/supprHouse.php" method="post">
            <label for="suppression">Nom de la maison à supprimer : </label><input type="text" name="houseName"/><br /> <br />
            <input type="submit" value="Appliquer" />
        </form>
        </div>
        </div>    
    </div>
    <div class="footer"> <?php include("../includes/footer.php"); ?> </div>
</body>
</html>
<?php

    function displayHouse() 
    { 
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        $idUser = $_SESSION['userId'];
        $req=$bdd -> query("SELECT idHouses, nameHouses FROM houses WHERE idUsers = $idUser");

        while( $data = $req -> fetch() )
        {
            $idHouse = $data['idHouses'];
            echo '<a href="room_data.php?idHouse='.$idHouse.'"\'>'.'<div class="icon_maison"><img src="../images/house.png">'.'</br>'.$data['nameHouses'].'</div>'.' </a>';
        }
        $req->closeCursor(); 
    }
?>
    
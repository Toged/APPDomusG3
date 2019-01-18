<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Definition maison</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/room_data.css">
    <script type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../script/header.js"></script>
</head>
<?php include("../includes/header.php"); ?>
<?php 
    if(isset($_GET['idHouse']))
    {
        $_SESSION['idHouse'] = $_GET['idHouse']; 
    }
?>
<body>
    <div class="house_data">
        <h1> Liste des pièces </h1><br />
        <div class="MAISON">
        <?php displayRoom(); ?>
        </div>
        <div class="modif_piece">
        <div class="ajout_piece"> 
        <h1>Ajoutez une pièce </h1><br />
        <form action="../includes/room_data.inc.php" method="post">
           
                <label for="nameRoom">Nom de la pièce</label> : <input type="text" name="nameRoom" id="nameRoom" /><br />

                <label for="sensorNbRoom">Nombre de capteurs </label> : <input type="number" name="sensorNbRoom" id="sensorNbRoom" /><br />

                <label for="typeRoom">Type de la pièce</label> : <select name="typeRoom", id="typeRoom">
                    <option value="cuisine"> cuisine</option>
                    <option value="chambre"> chambre </option>
                    <option value="salon"> salon</option>
                    <option value="salle à manger"> salle à manger</option>
                    <option value="salle de bain"> salle de bain</option>
                    <option value="toilettes"> toilettes</option>
                </select><br /><br />
                <input type="submit" value="Envoyer" /><br /><br />
        </form>
        </div>
        <div class="supprimer_piece">
        <h1>Supprimez une pièce</h1>
        <form action="../includes/suppRoom.php" method="post">
             <label for="suppression">Nom de la pièce à supprimer</label> : <input type="text" name="nameRoom" id="nameRoom" /><br />
             <input type="submit" value="Envoyer" /><br /><br />
        </form>
    </div>
    </div>
    </div>
    <div class="footer"> <?php include("../includes/footer.php"); ?> </div>
</body>
</html>
<?php

    function displayRoom() 
    { 
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        $id= $_SESSION['idHouse'];
        $req=$bdd -> query("SELECT idRoom, type, name, sensorNb FROM rooms WHERE idHouse = $id");


        while( $data = $req -> fetch() )
        {
            $idRoom = $data['idRoom'];
            echo '<a href="sensorclient.php?idRoom='.$idRoom.'"\'>'.'<div class="icon_piece"><img src="../images/bedroom.png">'.'</br>'.$data['name'].'</div>'.' </a>';
        }   
        $req->closeCursor(); 
    }
?>

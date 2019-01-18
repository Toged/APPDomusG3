<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Definition maison</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/house_data.css">
    <script type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../script/header.js"></script>
</head>
<?php include("../includes/header.php"); ?>

<body>
    <div class="house_data">
        <div class="MAISON"> <h1>AJOUTEZ UNE MAISON </h1> </div><br />
        <form action="../includes/house_data.inc.php" method="post">

                <label for="name">Définir le nom de l'habitation </label> : <input type="text" name="houseName" id="name" /><br />
           
                <label for="adress">Adresse</label> : <input type="text" name="adressHouse" id="adresse" /><br />

                <label for="areaHouse">Superficie</label> : <input type="number" name="areaHouse" id="areaHouse" /><br />

                <label for="roomTotalNb">Nombre de pièce</label> : <input type="number" name="roomTotalNb" id="roomTotalNb" /><br />

                <label for="personNb">Nombre de personne</label> : <select name="personNb", id="personNb">
                    <option value=1> 1 personne</option>
                    <option value=2> 2 personnes</option>
                    <option value=3> 3 personnes</option>
                    <option value=4> 4 personnes</option>
                    <option value=5> 5 personnes</option>
                    <option value=6> 6 personnes</option>
                    <option value=7> 7 personnes</option>
                    <option value=8> 8 personnes</option>
                    <option value=9> 9 personnes</option>
                </select><br /><br />
                <input type="submit" value="Envoyer" />
            
        </form>
    </div>
    <div class="footer"> <?php include("../includes/footer.php"); ?> </div>
</body>
</html>
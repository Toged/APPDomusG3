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
        <div class="MAISON"> <h1> MAISON </h1> </div>
        <form action="../includes/house_data.inc.php" method="post">
           
                <label for="adresse">Adresse</label> : <input type="text" name="adresse" id="adresse" /><br />
                <label for="superficie">Superficie</label> : <input type="number" name="superficie" id="superficie" /><br />

                <label for="nb_piece">Nombre de pièce</label> : <select name="nb_piece", id="nb_piece">
                    <option value=1> 1 pièce</option>
                    <option value=2> 2 pièces</option>
                    <option value=3> 3 pièces</option>
                    <option value=4> 4 pièces</option>
                    <option value=5> 5 pièces</option>
                    <option value=6> 6 pièces</option>
                    <option value=7> 7 pièces</option>
                    <option value=8> 8 pièces</option>
                    <option value=9> 9 pièces</option>
                </select><br />

                <label for="nb_personne">Nombre de personne</label> : <select name="nb_personne", id="nb_personne">
                    <option value=1> 1 personne</option>
                    <option value=2> 2 personnes</option>
                    <option value=3> 3 personnes</option>
                    <option value=4> 4 personnes</option>
                    <option value=5> 5 personnes</option>
                    <option value=6> 6 personnes</option>
                    <option value=7> 7 personnes</option>
                    <option value=8> 8 personnes</option>
                    <option value=9> 9 personnes</option>
                </select><br />
                <input type="submit" value="Envoyer" />
            
        </form>
    </div>
    <div class="footer"> <?php include("../includes/footer.php"); ?> </div>
</body>
</html>
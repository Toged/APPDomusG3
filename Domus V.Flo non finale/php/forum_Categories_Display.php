<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Forum</title>
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
         
        <div class="MAISON"> 
        <h1>Les catégories du forum </h1> <br />
        <?php displayCategory() ?>   
    </div>
     <?php include("../includes/footer.php"); ?>
</body>
</html>
<?php

    function displayCategory() 
    { 
        include("../includes/connexionBDD.php");
       
        $req=$bdd -> query("SELECT idCategories, nameCategories, descCategories, orderCategories FROM forum_categories ORDER by orderCategories");

        while($data = $req -> fetch() )
        {
            $idCat = $data['idCategories'];
            echo '<a href="forum_Topics_Display.php?idCat='.$idCat.'"\'>'.$data['nameCategories'].' </a>';
            echo '<br /> <br />';
        }
        $req->closeCursor(); 
    }
?>
    
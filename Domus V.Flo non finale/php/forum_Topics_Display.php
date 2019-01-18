<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Topics</title>
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
            <br />
        <h1>Liste des topics </h1> <br />
        <?php displayTopics() ?>   
    </div>
     <?php include("../includes/footer.php"); ?>
</body>
</html>
<?php

    function displayTopics() 
    { 
        include("../includes/connexionBDD.php");

        if(isset($_GET['idCat']))
            $id = $_GET['idCat']; 

        $req=$bdd -> query("SELECT t.idTopics, t.titleTopics, t.idCreatorTopics, t.timeTopics, u.uidUsers FROM forum_topics t
        	INNER JOIN users u ON u.idUsers = t.idCreatorTopics
        	WHERE idCategoryTopics = $id 
        	ORDER by vuTopics");

        while($data = $req -> fetch())
        {
        	$idTopic = $data['idTopics'];
            echo 'Créateur : '.$data['uidUsers'].' Nom du topic : <a href="forum_View_Topic.php?idTopic='.$idTopic.'"\'>'.$data['titleTopics']. '</a>';
            echo '<br /> <br />';
        }
        $req->closeCursor(); 
    }
?>
    
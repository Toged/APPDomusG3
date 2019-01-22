<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="UTF-8">
        <title>Contrôle ton habitat à distance!</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styleeclairage.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="header_V.1.js"></script>
    </head>
  
    <body>
            <!--Home page style-->
    

        <!-- Sections -->
       
        <h1>Vous souhaitez gérer l'éclairage...</h1>
                    
            

		<form method="post" action="GestionEclairage.php">
			<select name="choix_piece">
				<?php ReadRoom(); ?>
			</select>
		<br><br>
		<h2> Vous souhaitez que la lumière soit...</h2>
		<br>
		 	<select name="choix_lumiere">
		    	<option value="allumée">allumée</option>
		    	<option value="éteinte">éteinte</option>
			</select>
		<br><br>
		<input type="submit" value="Valider" /> 
		</form>
		<br><br>
		<?php DisplayMessage(); ?> 		

               
    </body>



 <?php 
function ReadRoom(){
	$bdd = new PDO('mysql:host=localhost;dbname=domus;charset=utf8', 'root', '');
	$req=$bdd -> query("SELECT * FROM rooms");
	while( $data = $req -> fetch() )
			{
				echo "<option value=".$data['name'].">".$data['name']."</option>";

			}
	$req->closeCursor();
}
?>

<?php 
function DisplayMessage(){
	if (isset($_POST['choix_lumiere']) AND isset($_POST['choix_piece'])) {
		if ($_POST['choix_lumiere'] == "allumée") {
			echo "La lumière ". $_POST['choix_piece']." est ".$_POST['choix_lumiere']."! "."<i class='far fa-lightbulb'></i>";
		}
		else if ($_POST['choix_lumiere'] == "éteinte") {
			echo "La lumière ". $_POST['choix_piece']." est ".$_POST['choix_lumiere']."! "."<i class='fas fa-lightbulb'></i>";
		}
		
	}
}
?>




</html>


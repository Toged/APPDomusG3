<?php 

				session_start();
				
				try
				{
					$db = new PDO('mysql:host=localhost;dbname=loginsystem', 'root', '');
				}
				catch (Exception $e)
				{
				    die('Erreur : ' . $e->getMessage());
				}

				$newUsername = $_POST['nusername'];
				$userId = $_SESSION['userId'];

				$_SESSION['userUid'] = $newUsername;

				$query=$db->prepare("UPDATE users SET uidUsers=:nusr WHERE idUsers=:id");
				$query->bindValue(':nusr',$newUsername ,PDO::PARAM_STR);
				$query->bindValue(':id',$userId,PDO::PARAM_INT);
				$query->execute();
				header("Location: ../php/mon_profil.php");
				exit();


?>
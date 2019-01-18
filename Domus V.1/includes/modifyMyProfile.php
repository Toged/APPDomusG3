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
				$newFirstName = $_POST['nprenom'];
				$newLastName = $_POST['nnom'];
				$userId = $_SESSION['userId'];

				$_SESSION['firstName'] = $newFirstName;
				$_SESSION['lastName'] = $newLastName;

				$query=$db->prepare("UPDATE users SET lastNameUsers=:nname WHERE idUsers=:id");
				$query->bindValue(':nname',$newLastName ,PDO::PARAM_STR);
				$query=$db->prepare("UPDATE users SET firstNameUsers=:fname WHERE idUsers=:id");
				$query->bindValue(':fname',$newFirstName ,PDO::PARAM_STR);
				$query->bindValue(':id',$userId,PDO::PARAM_INT);
				$query->execute();
				header("Location: ../php/mon_profil.php");
				exit();


?>
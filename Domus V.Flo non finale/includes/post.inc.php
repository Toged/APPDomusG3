<?php

session_start();

// Connexion à la base de données
include("../includes/connexionBDD.php");

if(isset($_SESSION['userId']) && isset($_SESSION['idTopic']))
{
	$userId = $_SESSION['userId'];
	$topicId = $_SESSION['idTopic'];
	$message = htmlspecialchars($_POST['message']); // Enlève les balises html (faille XSS)
	$datetime = date("Y-m-d H:i:s");

	if((preg_match("/^[a-zA-Z0-9]*$/", $message)))
	{
		$req = $bdd->prepare('INSERT INTO forum_posts (idTopicPosts, idCreatorPosts, textPosts, datePosts) VALUES(:topicId, :userId, :message, :datePost)');

		$req->execute(array(
			'userId' => $userId,
			'topicId' => $topicId,
			'message' => $message,
			'datePost' => $datetime
		));
	}
	

	
}

header('Location: ../php/forum_View_Topic.php?idTopic='.$topicId);
?>
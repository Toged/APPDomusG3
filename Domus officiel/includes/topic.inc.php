<?php

session_start();

// Connexion à la base de données
include("../includes/DBconnexion.php");

if(isset($_SESSION['userId']) && isset($_SESSION['idCat']))
{
	$userId = $_SESSION['userId'];
	$catId = $_SESSION['idCat'];
	$title = htmlspecialchars($_POST['title']); 
	$message = htmlspecialchars($_POST['message']); 
	$dateCreate = date("Y-m-d H:i:s");

		$req = $db->prepare('INSERT INTO forum_topics (idCategoryTopics, titleTopics, idCreatorTopics, lastDateTopics) VALUES(:catId, :title, :userId, :datePost)');

		$req->execute(array(
			'catId' => $catId,
			'title' => $title,
			'userId' => $userId,
			'datePost' => $dateCreate
		));

		/*$req = $db->query('SELECT idTopics FROM forum_topics WHERE titleTopics = "oui"');

		while($data = $req -> fetch());
        {
        	$topicId = $data['idTopics'];
        }

		$req = $db->prepare('INSERT INTO forum_posts (idTopicPosts, idCreatorPosts, textPosts, datePosts) VALUES(:topicId, :userId, :message, :datePost)');

		$req->execute(array(
			'topicId' => $topicId,
			'userId' => $userId,
			'message' => $message,
			'datePost' => $dateCreate
		));*/
		
}
header('Location: ../php/forum_topics.php?idCat='.$catId.'&idTopic='.$topicId);
?>
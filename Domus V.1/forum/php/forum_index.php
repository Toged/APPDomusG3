<?php
//Cette fonction doit être appelée avant tout code html
session_start();

//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
$titre = "Index du forum";
include("../includes/forum_begin.inc.php");
include("../includes/forum_identifiers.inc.php");
//include("../includes/forum_menu.inc.php");

//echo'<i>Vous êtes ici : </i><a href ="./index.php">Index du forum</a>';

?>

<h1>Forum</h1>

<table>
<?php

$totaldesmessages = 0;
$categorie = NULL;

//Cette requête permet d'obtenir tout sur le forum
$query=$db->prepare('SELECT cat_id, cat_name, 
	forum_forum.forum_id, forum_name, forum_desc, forum_post, forum_topic, auth_view, forum_topic.topic_id, forum_topic.topic_post, post_id, post_time, post_createur, member_pseudo, 
	member_id 
	FROM forum_category
	LEFT JOIN forum_forum ON forum_category.cat_id = forum_forum.forum_cat_id
	LEFT JOIN forum_post ON forum_post.post_id = forum_forum.forum_last_post_id
	LEFT JOIN forum_topic ON forum_topic.topic_id = forum_post.topic_id
	LEFT JOIN forum_members ON forum_members.member_id = forum_post.post_createur
	WHERE auth_view <= :lvl 
	ORDER BY cat_order, forum_order DESC');
$query->bindValue(':lvl',$lvl,PDO::PARAM_INT);
$query->execute();

//Début de la boucle
while($data = $query->fetch())
{
	
    //On affiche chaque catégorie
    if( $categorie != $data['cat_id'] )
    {
        //Si c'est une nouvelle catégorie on l'affiche
        
        $categorie = $data['cat_id'];
        ?>
        <tr>
        <th></th>
        <th class="titre"><strong><?php echo stripslashes(htmlspecialchars($data['cat_name'])); ?>
        </strong></th>             
        <th class="nombremessages"><strong>Sujets</strong></th>       
        <th class="nombresujets"><strong>Messages</strong></th>       
        <th class="derniermessage"><strong>Dernier message</strong></th>   
        </tr>
        <?php
               
    }

	// Ici, on met le contenu de chaque catégorie
    // Les forums en détail : description, nombre de réponses etc...

    echo'<tr><td><!--<img src="../images/message.gif" alt="message" />--!></td>
    <td class="titre"><strong>
    <a href="./voirforum.php?f='.$data['forum_id'].'">
    '.stripslashes(htmlspecialchars($data['forum_name'])).'</a></strong>
    <br />'.nl2br(stripslashes(htmlspecialchars($data['forum_desc']))).'</td>
    <td class="nombresujets">'.$data['forum_topic'].'</td>
    <td class="nombremessages">'.$data['forum_post'].'</td>';

    // Deux cas possibles :
    // Soit il y a un nouveau message, soit le forum est vide
    if (!empty($data['forum_post']))
    {
         //Selection dernier message
	 $nombreDeMessagesParPage = 15;
         $nbr_post = $data['topic_post'] +1;
	 $page = ceil($nbr_post / $nombreDeMessagesParPage);
		 
         echo'<td class="derniermessage">
         '.date('H\hi \l\e d/M/Y',$data['post_time']).'<br />
         <a href="./voirprofil.php?m='.stripslashes(htmlspecialchars($data['member_id'])).'&amp;action=consulter">'.$data['member_pseudo'].'  </a>
         <a href="./voirtopic.php?t='.$data['topic_id'].'&amp;page='.$page.'#p_'.$data['post_id'].'">
         <img src="./images/go.gif" alt="go" /></a></td></tr>';

     }
     else
     {
         echo'<td class="nombremessages">Pas de message</td></tr>';
     }

     //Cette variable stock le nombre de messages, on la met à jour
     $totaldesmessages += $data['forum_post'];

     //On ferme notre boucle et nos balises
} //fin de la boucle

$query->CloseCursor();
?>
</table>

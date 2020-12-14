<?php
include('../services/PDO_connection.php');

// Préparation de la requête
$sql = "SELECT comment.id,commentText,idAlbum,title FROM comment INNER JOIN album ON comment.idAlbum = album.id;";
// Execution de la requête
$req = $bdd->query($sql);

// On sauvegarde l'id et le titre des albums dans des arrays
$idComment = array();
$commentText = array();
$titleAlbum = array();
while ($donnees = $req->fetch()) {
	array_push($idComment, $donnees['id']);
	array_push($commentText, $donnees['commentText']);
	array_push($titleAlbum, $donnees['title']);
}

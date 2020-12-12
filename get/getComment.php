<?php
include('../services/PDO_connection.php');

// Préparation de la requête
$sql = "SELECT id,commentText,idAlbum FROM comment;";
// Execution de la requête
$req = $bdd->query($sql);

// On sauvegarde l'id et le titre des albums dans des arrays
$idComment = array();
$commentText = array();
$idAlbumFK = array();
while ($donnees = $req->fetch()) {
	array_push($idComment, $donnees['id']);
	array_push($commentText, $donnees['commentText']);
	array_push($idAlbumFK, $donnees['idAlbum']);
}
?>
<?php
include('../services/PDO_connection.php');

// Préparation de la requête
$sql = "SELECT album.id,title,firstname FROM album INNER JOIN artist ON album.idArtist = artist.id;";
// Execution de la requête
$req = $bdd->query($sql);

// On sauvegarde l'id et le titre des albums dans des arrays
$idAlbum = array();
$title = array();
$albumAuthor = array();
while ($donnees = $req->fetch()) {
	array_push($idAlbum, $donnees['id']);
	array_push($title, $donnees['title']);
	array_push($albumAuthor, $donnees['firstname']);
}

<?php
include('PDO_connection.php');

// Préparation de la requête
$sql = "SELECT id,title,idArtist FROM album;";
// Execution de la requête
$req = $bdd->query($sql);

// On sauvegarde l'id et le titre des albums dans des arrays
$idAlbum = array();
$title = array();
$idArtistFK = array();
while ($donnees = $req->fetch()) {
	array_push($idAlbum, $donnees['id']);
	array_push($title, $donnees['title']);
	array_push($idArtistFK, $donnees['idArtist']);
}
?>
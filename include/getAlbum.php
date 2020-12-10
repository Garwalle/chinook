<?php
// Connection à la base de donnée
try {
	$bdd = new PDO("mysql:host=localhost;dbname=chinook;charset=utf8", "root", "");
}

catch (Exception $e) {
	die("Erreur : ".$e->get_Message());
}

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
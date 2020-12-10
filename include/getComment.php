<?php
// Connection à la base de donnée
try {
	$bdd = new PDO("mysql:host=localhost;dbname=chinook;charset=utf8", "root", "");
}

catch (Exception $e) {
	die("Erreur : ".$e->get_Message());
}

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
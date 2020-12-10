<?php
// On récupere les données envoyer par la page index avec la méthod POST
$idAlbum = $_POST["idAlbum"];
$commentText = $_POST["commentText"];

// Connection à la base de donnée
try {
	$bdd = new PDO("mysql:host=localhost;dbname=chinook;charset=utf8", "root", "");
}

catch (Exception $e) {
	die("Erreur : ".$e->get_Message());
}

// Préparation de la requête
$sql = "INSERT INTO comment (commentText, idAlbum) VALUES ('".$commentText."', ".$idAlbum.");";
// Execution de la requête
$req = $bdd->query($sql);

// Redirection automatique vers index.html
header("Location: ../index.php");
?>
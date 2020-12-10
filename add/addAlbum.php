<?php
// On récupere les données envoyer par la page index avec la méthod POST
$idArtist = $_POST["idArtist"];
$title = $_POST["title"];

// Connection à la base de donnée
try {
	$bdd = new PDO("mysql:host=localhost;dbname=chinook;charset=utf8", "root", "");
}

catch (Exception $e) {
	die("Erreur : ".$e->get_Message());
}

// Préparation de la requête
$sql = "INSERT INTO album (title, idArtist) VALUES ('".$title."', ".$idArtist.");";
// Execution de la requête
$req = $bdd->query($sql);

// Redirection automatique vers index.html
header("Location: ../index.php");
?>
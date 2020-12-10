<?php
// On récupere les données envoyer par la page index avec la méthod POST
$idArtist = $_POST["idArtist"];
$title = $_POST["title"];

include('../PDO_connection.php');

// Préparation de la requête
$sql = "INSERT INTO album (title, idArtist) VALUES ('" . $title . "', " . $idArtist . ");";
// Execution de la requête
$req = $bdd->query($sql);

// Redirection automatique vers index.html
header("Location: ../index.php");
?>
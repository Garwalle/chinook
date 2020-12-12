<?php
// On récupere les données envoyer par la page index avec la méthod POST
$idAlbum = $_POST["idAlbum"];
$commentText = $_POST["commentText"];

include('../services/PDO_connection.php');

// Préparation de la requête
$sql = "INSERT INTO comment (commentText, idAlbum) VALUES ('" . $commentText . "', " . $idAlbum . ");";
// Execution de la requête
$req = $bdd->query($sql);

// Redirection automatique vers index.html
header("Location: ../page/index.php");
?>
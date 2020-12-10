<?php
// On récupere les données envoyer par la page index avec la méthod POST
$idUser = $_POST["idUser"];
$login = $_POST["login"];
$password = $_POST["password"];

include('../PDO_connection.php');

// Préparation de la requête
$sql = "INSERT INTO album (title, idArtist) VALUES ('" . $title . "', " . $idArtist . ");";
// Execution de la requête
$req = $bdd->query($sql);

// Redirection automatique vers index.html
header("Location: ../index.php");
?>
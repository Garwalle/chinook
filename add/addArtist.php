<?php
// On récupere les données envoyer par la page index avec la méthod POST
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];

include('../get/PDO_connection.php');

// Préparation de la requête
$sql = "INSERT INTO artist (firstname, lastname) VALUES ('" . $firstname . "', '" . $lastname . "');";
// Execution de la requête
$req = $bdd->query($sql);

// Redirection automatique vers index.html
header("Location: ../page/index.php");
?>
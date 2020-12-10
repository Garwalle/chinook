<?php
// On récupere les données envoyer par la page index avec la méthod POST
$username = $_POST["username"];
$pass = $_POST["pass"];
$email = $_POST["email"];

include('../get/PDO_connection.php');

// Préparation de la requête
$sql = "INSERT INTO user (username, pass, email) VALUES ('" . $username . "', '" . $pass . "', '" . $email . "');";
// Execution de la requête
$req = $bdd->query($sql);

// Redirection automatique vers index.html
header("Location: ../page/index.php");
?>
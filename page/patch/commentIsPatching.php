<?php
$commentText = $_POST["commentText"];

include('../../services/PDO_connection.php');

// Préparation de la requête
$sql = "UPDATE comment SET commentText = '$commentText' WHERE id =" . $_GET['id'] . ";";
// Execution de la requête
$req = $bdd->query($sql);

header("Location: ../comment.php");

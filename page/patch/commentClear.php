<?php
include('../../services/PDO_connection.php');

// Préparation de la requête
$sql = "DELETE FROM comment WHERE id = '" . $_GET['id'] . "';";
// Execution de la requête
$req = $bdd->query($sql);

header("Location: ../comment.php");
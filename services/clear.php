<?php
include('PDO_connection.php');

// Suppression des données dans toutes les tabless (l'ordre des requêtes est important, du aux foreing key)
$sql = " DELETE FROM `user`; DELETE FROM `comment`; DELETE FROM `album`; DELETE FROM `artist`;";
$req = $bdd->query($sql);

header("Location: ../page/index.php");
?>
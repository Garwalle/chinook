<?php

echo "Hello world !";

include('services/PDO_connection.php');

// Préparation de la requête
$sql = "SELECT username FROM user;";
// Execution de la requête
$req = $bdd->query($sql);

// On sauvegarde l'id et le titre des albums dans des arrays
while ($donnees = $req->fetch()) {
    echo $donnees['username'];
}

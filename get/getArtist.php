<?php
include('PDO_connection.php');

// Préparation de la requête
$sql = "SELECT id,firstname,lastName FROM artist;";
// Execution de la requête
$req = $bdd->query($sql);

// On sauvegarde l'id et le nom des artistes dans des arrays
$idArtist = array();
$firstName = array();
$lastName = array();
while ($donnees = $req->fetch()) {
	array_push($idArtist, $donnees['id']);
	array_push($firstName, $donnees['firstname']);
	array_push($lastName, $donnees['lastName']);
}
?>
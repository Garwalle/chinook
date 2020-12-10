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

// On crée une session avec l'id de l'utilisateur connecté
session_start();
$sql = "SELECT id,username,userRole FROM user WHERE email = '".$email."';";
echo $sql;
$req = $bdd->query($sql);
while ($donnees = $req->fetch()) {
    $_SESSION["CU_id"] = $donnees['id'];
    $_SESSION["CU_username"] = $donnees['username'];
    $_SESSION["CU_userRole"] = $donnees['userRole'];
}

// Redirection automatique vers index.html
header("Location: ../page/index.php");
?>
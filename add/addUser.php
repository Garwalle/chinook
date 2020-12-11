<?php
// On récupere les données envoyer par la page index avec la méthod POST
$username = $_POST["username"];
$pass = $_POST["pass"];
$email = $_POST["email"];

include('../get/PDO_connection.php');

// On regarde si l'email de l'utilisateur n'est pas déjà dans la table user
$sql = "SELECT email FROM user WHERE email = '" . $email . "';";
$req = $bdd->query($sql);

// Si non, alors on peut l'ajouter
session_start();
if (!$req->rowCount() > 0) {
    $sql = "INSERT INTO user (username, pass, email) VALUES ('" . $username . "', '" . $pass . "', '" . $email . "');";
    $req = $bdd->query($sql);

    // On crée la session de l'utilisateur connecté
    $sql = "SELECT id,username,email,userRole FROM user WHERE email = '" . $email . "';";
    echo $sql;
    $req = $bdd->query($sql);
    while ($donnees = $req->fetch()) {
        $_SESSION["CU_id"] = $donnees['id'];
        $_SESSION["CU_username"] = $donnees['username'];
        $_SESSION["CU_email"] = $donnees['email'];
        $_SESSION["CU_userRole"] = $donnees['userRole'];
    }
} else {
    $_SESSION["emailInDB"] = true;
}

// Redirection automatique vers index.html
header("Location: ../page/index.php");

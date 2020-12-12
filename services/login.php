<?php
// On récupere les données envoyer par la page index avec la méthod POST
$email = $_POST["email"];
$pass = $_POST["pass"];

include('PDO_connection.php');

// On récupère les données de l'utilisateur, si un champ correspond à l'email et le mdp
$sql = "SELECT id,username,pass,email,userRole FROM user WHERE email = '" . $email . "' AND pass = '" . $pass . "';";
$req = $bdd->query($sql);

session_start();
if ($req->rowCount() > 0) {
    while ($donnees = $req->fetch()) {
        $_SESSION["CU_id"] = $donnees['id'];
        $_SESSION["CU_username"] = $donnees['username'];
        $_SESSION["CU_email"] = $donnees['email'];
        $_SESSION["CU_userRole"] = $donnees['userRole'];
    }
} else {
    $_SESSION["errorMessage"] = "Wrong email or password.";
}

// Redirection automatique vers index.html
header("Location: ../page/index.php");

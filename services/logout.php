<?php
// On supprime les variables de session
session_start();
unset($_SESSION["CU_id"]);
unset($_SESSION["CU_username"]);
unset($_SESSION["CU_email"]);
unset($_SESSION["CU_userRole"]);

header("Location: ../page/index.php");

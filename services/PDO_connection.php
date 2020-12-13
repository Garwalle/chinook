<?php
// Connection à la base de donnée

/* Local
$host = "127.0.0.1";
$db = "chinook";
$user = "root";
$pass = "";
$charset = "utf8";
*/

/* Remote */
$host = "us-cdbr-east-02.cleardb.com";
$db = "chinook";
$user = "ba54402293b69f";
$pass = "618a3852";
$charset = "utf8";

try {
	$bdd = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
} catch (Exception $e) {
	$bdd->rollback();
	throw $e;
}

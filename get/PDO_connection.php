<?php
// Connection à la base de donnée
try {
	$bdd = new PDO("mysql:host=localhost;dbname=chinook;charset=utf8", "root", "");
} catch (Exception $e) {
	$bdd->rollback();
	throw $e;
}
?>
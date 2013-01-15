<?php
include_once 'lib/orm/EntityManagerFactory.php';


$izena=$_POST["izena"];
$pass=$_POST["pass"];
$ddbb=$_POST["izena"];

$connectionOptions = array(
	'driver' => 'pdo_mysql',
	'host' => 'localhost',
	'dbname' => $ddbb,
	'user' => $izena,
	'password' => $pass
	);

$em=EntityManagerFactory::createEntityManager();
$em

?>

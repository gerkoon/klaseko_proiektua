<?php
include_once 'lib/orm/EntityManagerFactory.php';


$izena=$_POST["izena"];
$pass=$_POST["pass"];
$ddbb=$_POST["izena"];

$sartu = new entityManagerFactory();

$sartu->sartuDatuak($ddbb,$izena,$pass);
$sartu->createEntityManager();

?>

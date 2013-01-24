<?php
session_start();
include_once 'lib/orm/EntityManagerFactory.php';


$izena=$_POST["izena"];
$pass=$_POST["pass"];
$ddbb=$_POST["izena"];

$_SESSION["izena"]=$izena;
$_SESSION["pass"]=$pass;
$_SESSION["izena"]=$ddbb;

$sartu = entityManagerFactory::createEntityManager($ddbb,$izena,$pass);

require_once "index2.php";
?>

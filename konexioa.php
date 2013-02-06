<?php
session_start();
include_once 'lib/orm/EntityManagerFactory.php';


$izena=$_POST["izena"];
$pass=$_POST["pass"];
$ddbb=$_POST["ddbb"];

$_SESSION["izena"]=$izena;
$_SESSION["pass"]=$pass;
$_SESSION["ddbb"]=$ddbb;
$_SESSION['zein']=0;
$sartu = entityManagerFactory::createEntityManager($ddbb,$izena,$pass);
error_reporting(0);
try {
                $sartu->getRepository('entities\eguna')->findAll();
                } catch (Exception $exc) {
                header('Location: index.php'); 
                }
header('Location: index2.php'); 


?>

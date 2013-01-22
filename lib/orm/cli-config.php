<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

	 
	require_once __DIR__ . '/doctrine-orm/Doctrine/Common/ClassLoader.php';
	 
	$classLoader = new \Doctrine\Common\ClassLoader('entities', realpath('../model'));
	$classLoader->register();
	 
	$classLoader = new \Doctrine\Common\ClassLoader('Proxies', __DIR__);
	$classLoader->register();
	$classLoader->setNamespaceSeparator('_');
	 
	$config = new \Doctrine\ORM\Configuration();
	$config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache);
	//Path de las entidades
	$driverImpl = $config->newDefaultAnnotationDriver(array(__DIR__ . "/../model/entities"));
	$config->setMetadataDriverImpl($driverImpl);
	 
	//Path de los proxies:
	$config->setProxyDir(__DIR__ . '/../model/proxies');
//Nombre del NameSpace o paquete que contendrá los proxies
	$config->setProxyNamespace('proxies');
	 
	//Opciones de conexión a la base de datos
	$connectionOptions = array(
	'driver' => 'pdo_mysql',
	'host' => 'localhost',
	'dbname' => 'maranona',
	'user' => 'maranona',
	'password' => 'password'
	);
	 
	$em = \Doctrine\ORM\EntityManager::create($connectionOptions, $config);
	 
	$helpers = array(
	'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
	'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
);


?>

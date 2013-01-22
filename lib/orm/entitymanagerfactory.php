<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once __DIR__ . '/doctrine-orm/Doctrine/Common/ClassLoader.php';

use Doctrine\Common\ClassLoader,
Doctrine\ORM\Configuration,
Doctrine\ORM\EntityManager,
Doctrine\Common\Cache\ApcCache;

/**
* Description of EntityManagerFactory
*
* @author Juan Carlos Perez Zapata
* @version 0.1
*/
class EntityManagerFactory {

/**
* @var Doctrine\ORM\EntityManager
*/
private static $em;

/**
*
* @return Doctrine\ORM\EntityManager
*/
public static function createEntityManager() {

if (self::$em == null) { 

//Paso 1: Cargamos las clases del namespace Doctrine
$classLoader = new \Doctrine\Common\ClassLoader('Doctrine', realpath("lib/orm/doctrine-orm/"));
$classLoader->register();

// Paso 2: Cargamos las entidades
$entitiesClassLoader = new ClassLoader('entities', realpath("lib/model"));
$entitiesClassLoader->register();

//Paso 3: Cargamos las clases que sirven de proxies
$proxiesClassLoader = new ClassLoader('proxies', realpath("lib/model"));
$proxiesClassLoader->register();

//Paso 4: Configuracion de la caché
$config = new Configuration();
$config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache());

//Paso 5: Configuracion de los metadatos de la entidades
$driverImpl = $config->newDefaultAnnotationDriver(array(__DIR__ . "/../model/entities"));
$config->setMetadataDriverImpl($driverImpl);

//Paso 6: Configuracion clases proxies
$config->setProxyDir(__DIR__ . '/../model/proxies');
$config->setProxyNamespace('proxies');

//Paso 7: Configuración de los datos de conexión
$connectionOptions = array(
'driver' => 'pdo_mysql',
'host' => 'localhost',
'dbname' => 'maranona',
'user' => 'maranona',
'password' => 'password'
);

//Pase 8: Creacion EntityManager
self::$em = EntityManager::create($connectionOptions, $config);
}

return self::$em;
}

}

?>

<?php
require_once "vendor/autoload.php";

// Setup Doctrine
$configuration = Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
    $paths = [ realpath(dirname(__FILE__)). '/classes/Entities'],
    $isDevMode = true
);

$ini = realpath(dirname(__FILE__)). "/config/db.inc" ;

if (!$parse = parse_ini_file($ini, TRUE)) throw new exception('Unable to open ' . $ini . '.');

$driver = $parse['database'][ "db_driver" ];
$dbname = $parse['dsn']["dbname"];
$port = $parse['dsn']["port"];
$host = $parse['dsn']["host"];
$user = $parse['database'][ "db_user" ] ;
$password = $parse['database'][ "db_password" ] ;

// Setup connection parameters
$connection_parameters = [
    'dbname' => $dbname,
    'user' => $user,
    'password' => $password,
    'host' => $host,
    'driver' => 'pdo_mysql'
];

// Get the entity manager
$entity_manager = Doctrine\ORM\EntityManager::create($connection_parameters, $configuration);
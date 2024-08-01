<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use Doctrine\DBAL\DriverManager;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');

$connectionParams = [
    'user' => $_ENV['MYSQL_USER'],
    'password' => $_ENV['MYSQL_PASSWORD'],
    'host' => "{$_ENV['MYSQL_HOST']}:{$_ENV['MYSQL_PORT']}",
    'driver' => 'pdo_mysql',
];

try {
    // Get connection
    $connection  = DriverManager::getConnection($connectionParams);

    $databaseNames = $connection->createSchemaManager()->listDatabases();
    $databaseExists = array_search($_ENV['MYSQL_DATABASE'], $databaseNames);
    // Drop database if exists already
    if ($databaseExists) {
        $connection->createSchemaManager()->dropDatabase($_ENV['MYSQL_DATABASE']);
    }

    // Create database
    $connection->createSchemaManager()->createDatabase($_ENV['MYSQL_DATABASE']);

    print "succeeded in (re)creating database: {$_ENV['MYSQL_DATABASE']}\n";
} catch (Exception $e) {
    print "there was a problem creating the database: $e";
}

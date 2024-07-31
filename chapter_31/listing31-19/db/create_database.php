<?php
define('DB_NAME', 'date1');
$connection = new \PDO( 'mysql:host=localhost:3306',
    'root',
    'passpass'
);
$sql = 'CREATE DATABASE ' . DB_NAME ;
$stmt0 = $connection->prepare($sql);
$stmt0->execute();

$connection = new \PDO(
    'mysql:dbname=' . DB_NAME . ';host=localhost:3306',
'root',
'passpass'
);




$sql =
    'CREATE TABLE IF NOT EXISTS appointment ('
    . '    id integer PRIMARY KEY AUTO_INCREMENT,'
    . '   title text,'
    . '   startdatetime datetime(6)'
    . ')';

$stmt1 = $connection->prepare($sql);
$stmt1->execute();

//$sql = "INSERT INTO product (description, price) VALUES ('hammer', 9.99)";
//$stmt2 = $connection->prepare($sql);
//$stmt2->execute();
//
//$sql = "INSERT INTO product (description, price) VALUES ('ladder', 59.99)";
//$stmt3 = $connection->prepare($sql);
//$stmt3->execute();

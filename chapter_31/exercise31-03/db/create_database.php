<?php
define('DB_NAME', 'ex3103');
$connection = new \PDO( 'mysql:host=localhost:3306',
    'root',
    'passpass'
);
$sql = 'CREATE DATABASE IF NOT EXISTS ' . DB_NAME ;
$stmt0 = $connection->prepare($sql);
$stmt0->execute();

$connection = new \PDO(
    'mysql:dbname=' . DB_NAME . ';host=localhost:3306',
'root',
'passpass'
);

$sql =
    'CREATE TABLE IF NOT EXISTS consultation ('
    . 'id integer PRIMARY KEY AUTO_INCREMENT,'
    . 'patient text,'
    . 'doctor text,'
    . 'duration integer,'
    . 'consultationdatetime datetime(6)'
    . ')';


$stmt1 = $connection->prepare($sql);
$stmt1->execute();


// insert data
//$sql1 = "INSERT INTO appointment (id, title, startdatetime) VALUES (1, 'dentist', '2000-12-01 09:00:00.11')";
//$sql2 = "INSERT INTO appointment (id, title, startdatetime) VALUES (2, 'dinner', '2000-12-20 18:00:00.007')";
//$connection->exec($sql1);
//$connection->exec($sql2);
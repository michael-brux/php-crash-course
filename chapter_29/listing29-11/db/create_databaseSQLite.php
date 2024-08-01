<?php
define('FILENAME', 'demo1.db');
define('FOLDER_PATH', __DIR__ . '/../var/');

if(!file_exists(FOLDER_PATH)){
    mkdir(FOLDER_PATH);
}

$connection = new \PDO(
    'sqlite:' . FOLDER_PATH . FILENAME
);

$sql = 'CREATE TABLE IF NOT EXISTS product ('
    . 'id integer PRIMARY KEY AUTOINCREMENT,'
    . 'description text,'
    . 'price float'
    . ')';

$stmt1 = $connection->prepare($sql);
$stmt1->execute();

$sql = "INSERT INTO product (description, price) VALUES ('hammer', 9.99)";

$stmt2 = $connection->prepare($sql);
$stmt2->execute();

$sql = "INSERT INTO product (description, price) VALUES ('ladder', 59.99)";

$stmt3 = $connection->prepare($sql);
$stmt3->execute();
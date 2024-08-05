<?php
define('DB_NAME', 'book1');
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
$sql = 'CREATE TABLE IF NOT EXISTS book ('
    . 'id integer PRIMARY KEY AUTO_INCREMENT,'
    . 'title text,'
    . 'author text,'
    . 'price float'
    . ')';
$stmt1 = $connection->prepare($sql);
$stmt1->execute();

$sql = "INSERT INTO book (title, author, price) VALUES ('The Green Book', 'Aaron A. Ireland', 9.99)";
$stmt2 = $connection->prepare($sql);
$stmt2->execute();

$sql = "INSERT INTO book (title, author, price) VALUES ('The Complete Sherlock Holmes', 'Sir Arthur Connan Doyle', 59.99)";
$stmt3 = $connection->prepare($sql);
$stmt3->execute();

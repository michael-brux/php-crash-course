<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../bootstrap.php';

$sql = 'SELECT * FROM product';
$stmt = $connection->executeQuery($sql);
$result = $stmt->fetchAllAssociative();

// Print results
foreach ($result as $row) {
    print "ID: {$row['id']}, Description: {$row['description']}\n";
}

<?php
$jsonUrl = 'https://jsonplaceholder.typicode.com/todos/1';

$jsonData = file_get_contents($jsonUrl);
$dataAsArray = json_decode($jsonData, associative: true);

var_dump($dataAsArray);
print_r($dataAsArray);


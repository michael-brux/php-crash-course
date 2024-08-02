<?php
require 'zeroFunction.php'; // Read in our function

$isSubmitted = ($_SERVER['REQUEST_METHOD'] === 'POST');
$productCode = '';
$price = '';
$errors = [];

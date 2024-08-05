<!-- prevent getting executed twice each time due to favicon requests -->
<link rel="icon" href="data:;base64,iVBORw0KGgo=">

<?php
// ---- highest level of in-your-face error reporting --
error_reporting(E_ALL);
ini_set('display_errors', 1);

// read and execute the Composer generated autoloader
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\Application;

// create a new Application object
// and invoke its run() method
$app = new Application();
$app->run();
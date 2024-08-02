<?php
$file = __DIR__ . '/data.txt';

$text = file_get_contents($file);
print $text;

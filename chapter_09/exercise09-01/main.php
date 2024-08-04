<?php
$content = [
    'A magazine writer named Bing',
    'Could make copy from most anything',
    'But the copy he wrote',
    'of a ten-dollar note',
    'Was so good he now lives in Sing Sing',
];

// convert to a string
// with end of line characters
$contentString = implode(PHP_EOL, $content);

$file = __DIR__ . '/limerick.txt';

file_put_contents($file, $contentString);


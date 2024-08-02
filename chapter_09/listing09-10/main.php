<?php
$newContent = <<<CONTENT
    the rat
    spat
    on the cat!
    CONTENT;

$file = __DIR__ . '/newfile.txt';

file_put_contents($file, $newContent, FILE_APPEND);
$text = file_get_contents($file);
print $text;

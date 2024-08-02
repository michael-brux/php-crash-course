<?php
print "I'm in main.php\n";

$callingScriptPath = __DIR__;
print "callingScriptPath = $callingScriptPath\n";

require_once __DIR__ . '/file2.php';

print "I'm back in main.php\n";

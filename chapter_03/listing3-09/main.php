<?php
$string1 = <<<EOT
the
    cat     sat
    \t\t on    the
mat


EOT;

$noTabs = str_replace("\t", ' ', $string1);
$noNewlines = str_replace("\n", ' ', $noTabs);

$output = str_replace('  ', ' ', $noNewlines);
$output = str_replace('  ', ' ', $output);
$output = str_replace('  ', ' ', $output);

$output = trim($output);

print "[$output]";

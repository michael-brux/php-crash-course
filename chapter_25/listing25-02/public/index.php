<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\AudioClip;

print '- Max AudioClip duration so far = ' . AudioClip::getMaxClipDurationSeconds() . PHP_EOL;

$clip1 = new AudioClip('hello world', 2); print $clip1;
print '- Max AudioClip duration so far = '. AudioClip::getMaxClipDurationSeconds() . PHP_EOL;

$clip2 = new AudioClip('bad duration', -10); print $clip2;
print '- Max AudioClip duration so far = ' . AudioClip::getMaxClipDurationSeconds() . PHP_EOL;

$clip3 = new AudioClip('My Way', 275); print $clip3;
print '- Max AudioClip duration so far = ' . AudioClip::getMaxClipDurationSeconds() . PHP_EOL;

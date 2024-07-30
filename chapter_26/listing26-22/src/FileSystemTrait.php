<?php

namespace Mattsmithdev;

trait FileSystemTrait
{
    private function makeDirIfNotExists(string $directory): bool
    {
        return is_dir($directory) || mkdir($directory);
    }

    private function makeEmptyFile(string $path): bool
    {
        return file_put_contents($path, '');
    }
}
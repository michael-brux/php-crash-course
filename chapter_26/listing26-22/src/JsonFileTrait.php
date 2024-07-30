<?php

namespace Mattsmithdev;

trait JsonFileTrait
{
    private function readJson(string $path): array
    {
        $jsonString = file_get_contents($path);

        if (!$jsonString) {
            return [];
        }

        $dataItems = json_decode($jsonString, true);
        return $dataItems;
    }

    private function writeJson(string $path, array $dataItems): bool
    {
        $jsonString = json_encode($dataItems);
        return file_put_contents($path, $jsonString);
    }
}
<?php

namespace Mattsmithdev;

class CacheJson
{
    private const CACHE_PATH = __DIR__ . '/../var/cache.json';

    public function set(string $key, string $value): void
    {
        $dataItems = $this->readJson();
        $dataItems[$key] = $value;
        $this->writeJson($dataItems);
    }

    public function get(string $key): ?string
    {
        $dataItems = $this->readJson();

        if ($this->has($key)) {
            return $dataItems[$key];
        }

        return NULL;
    }

    public function has(string $key): bool
    {
        $dataItems = $this->readJson();
        return array_key_exists($key, $dataItems);
    }
    
    private function readJson(): array
    {
        $jsonString = file_get_contents(self::CACHE_PATH);

        if (!$jsonString) {
            return [];
        }

        $dataItems = json_decode($jsonString, true);
        return $dataItems;
    }

    private function writeJson(array $dataItems): bool
    {
        $jsonString = json_encode($dataItems);
        return file_put_contents(self::CACHE_PATH, $jsonString);
    }
}
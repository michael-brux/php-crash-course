<?php

namespace Mattsmithdev;

class CacheStatic implements Cacheable
{
    private static array $dataItems = [];

    public function reset(): void {
        self::$dataItems = [];
    }
    
    public function set(string $key, string $value): void
    {
        self::$dataItems[$key] = $value;
    }

    public function get(string $key): ?string
    {
        if (self::has($key)) {
            return self::$dataItems[$key];
        }

        return NULL;
    }

    public function has(string $key): bool
    {
        return array_key_exists($key, self::$dataItems);
    }
}
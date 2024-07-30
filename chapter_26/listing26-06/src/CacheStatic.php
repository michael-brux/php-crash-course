<?php

namespace Mattsmithdev;

class CacheStatic
{
    private static array $dataItems = [];

    public static function set(string $key, string $value): void
    {
        self::$dataItems[$key] = $value;
    }

    public static function get(string $key): ?string
    {
        if (self::has($key)) {
            return self::$dataItems[$key];
        }

        return NULL;
    }

    public static function has(string $key): bool
    {
        return array_key_exists($key, self::$dataItems);
    }
}
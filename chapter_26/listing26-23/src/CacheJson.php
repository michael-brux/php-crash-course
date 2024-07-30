<?php

namespace Mattsmithdev;

class CacheJson implements Cacheable
{
    use FileSystemTrait, JsonFileTrait;

    private const CACHE_PATH = __DIR__ . '/../var/cache.json';

    public function reset(): void
    {
        $directory = dirname(self::CACHE_PATH);
        $this->makeDirIfNotExists($directory);
        $this->makeEmptyFile(self::CACHE_PATH);
    }

    private function makeDirIfNotExists(string $directory): bool
    {
        return is_dir($directory) || mkdir($directory);
    }

    private function makeEmptyFile(string $path): bool
    {
        return file_put_contents($path, '');
    }

    public function set(string $key, string $value): void
    {
        $dataItems = $this->readJson(self::CACHE_PATH);
        $dataItems[$key] = $value;
        $this->writeJson(self::CACHE_PATH, $dataItems);
    }

    public function get(string $key): ?string
    {
        $dataItems = $this->readJson(self::CACHE_PATH);

        if ($this->has($key)) {
            return $dataItems[$key];
        }

        return NULL;
    }

    public function has(string $key): bool
    {
        $dataItems = $this->readJson(self::CACHE_PATH);
        return array_key_exists($key, $dataItems);
    }


}
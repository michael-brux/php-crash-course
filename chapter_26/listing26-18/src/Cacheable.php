<?php

namespace Mattsmithdev;

interface Cacheable
{
    public function reset(): void;
    public function set(string $key, string $value): void;
    public function get(string $key): ?string;
    public function has(string $key): bool;
}
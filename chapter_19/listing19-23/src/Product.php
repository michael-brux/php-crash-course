<?php

class Product
{
    protected int $skuId;
    private string $description;

    public function __construct(int $skuId, string $description)
    {
        $this->skuId = $skuId;
        $this->description = $description;
    }

    public function getSkuId(): int
    {
        return $this->skuId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    final public function setSkuId(int $skuId): void
    {
        if ($skuId > 0) $this->skuId = $skuId;
    }
}
<?php

class MyProduct extends Product
{
    public function setSkuId(int $skuId): void
    {
        $this->skuId = $skuId;
    }
}
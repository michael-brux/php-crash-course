<?php

namespace Mattsmithdev;

interface SalesTaxable
{
    public function getPriceIncludingSalesTax(): float;
}
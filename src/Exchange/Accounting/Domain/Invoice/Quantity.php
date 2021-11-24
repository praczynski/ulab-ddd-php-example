<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Domain\Invoice;

class Quantity
{
    public function __construct(private int $value)
    {
        if ($this->value < 1) {
            throw new \InvalidArgumentException("Quantity must be greater than 0");
        }
    }
}

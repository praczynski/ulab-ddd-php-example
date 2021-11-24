<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Domain\Invoice;

use Ulab\Exchange\Accounting\Domain\Invoice\Money;

class Item
{
    public function __construct(private string $productNumber, private Quantity $quantity, public readonly Money $value)
    {
    }
}

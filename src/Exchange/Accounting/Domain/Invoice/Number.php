<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Domain\Invoice;

use InvalidArgumentException;

class Number
{
    public function __construct(private string $number)
    {
        if (strlen($number) !== 5) {
            throw new InvalidArgumentException("Invoice number can't be longer than 5 characters");
        }
    }
}

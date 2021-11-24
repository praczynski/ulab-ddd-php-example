<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Domain\Invoice;

use InvalidArgumentException;

class NIP
{
    public function __construct(private string $number)
    {
        if (strlen($this->number) !== 9) {
            throw new InvalidArgumentException("NIP number is incorrect");
        }
    }
}

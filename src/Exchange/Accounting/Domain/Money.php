<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Domain\Invoice;

use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;

class Money
{
    private Currency $currency;

    public function __construct(
        private int $value,
        ?Currency $currency = null,
    ) {
        $this->currency = $currency ?? new Currency();
    }

    /**
     * @throws InvalidArgumentException)
     */
    public function add(Money $money): self
    {
        if ($this->hasSameCurrency($money)) {
            throw new InvalidArgumentException("Can't add different currencies");
        }

        return new self($this->value + $money->value, $this->currency);
    }

    #[Pure] private function hasSameCurrency(Money $money): bool
    {
        return $this->currency->isEqual($money->currency);
    }

    public function isMoreThan(Money $money): bool
    {
        return $this->value > $money->value;
    }
}

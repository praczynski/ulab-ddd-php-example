<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Domain\Invoice;

class Currency
{
    public function __construct(private CurrencySymbol $currencySymbol = CurrencySymbol::PLN)
    {
    }

    public function isEqual(Currency $currency): bool
    {
        return $this->currencySymbol->name === $currency->currencySymbol->name;
    }
}

<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Domain\Invoice;

class Buyer
{
    public function __construct(
        private string $companyName,
        private string $nameAndSurname,
        private NIP $nip,
    ) {
    }
}

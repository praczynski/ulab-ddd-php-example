<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Infrastructure\Db;

use Ulab\Exchange\Accounting\Domain\Invoice\Invoice;
use Ulab\Exchange\Accounting\Domain\Invoice\InvoiceRepository;
use Ulab\Exchange\Accounting\Domain\Invoice\Number;

class DbInvoiceRepository implements InvoiceRepository
{

    public function get(Number $id): Invoice
    {
          // TODO: Implement get() method.
    }

    public function find(Number $id): bool
    {
        return false;
    }

    public function save(Invoice $invoice): bool
    {
        return false;
    }
}

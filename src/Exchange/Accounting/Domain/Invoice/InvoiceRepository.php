<?php

namespace Ulab\Exchange\Accounting\Domain\Invoice;

interface InvoiceRepository
{
    public function get(Number $id): Invoice;
    public function find(Number $id): bool;
    public function save(Invoice $invoice): bool;
}

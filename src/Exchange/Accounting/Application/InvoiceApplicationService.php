<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Application;

use Ulab\Exchange\Accounting\Domain\Invoice\Invoice;
use Ulab\Exchange\Accounting\Domain\Invoice\InvoiceRepository;
use Ulab\Exchange\Accounting\Domain\Invoice\InvoiceFactory;

class InvoiceApplicationService
{
    public function __construct(
        private InvoiceRepository $invoiceRepository,
        private InvoiceFactory $invoiceFactory
    ) {
    }

    public function createCorrectingNotice()
    {
    }

    public function createInvoice(): Invoice
    {
        return $this->invoiceFactory->create();
    }
}

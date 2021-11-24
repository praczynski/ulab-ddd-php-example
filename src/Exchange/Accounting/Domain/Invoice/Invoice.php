<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Domain\Invoice;

class Invoice
{
    /** @var array<Item> $items */
    private array $items;

    private Money $sumOfPositions;

    public function __construct(
        private Number $number,
        private Seller $seller,
        private Buyer $buyer,
        array $items,
        private ?Status $status = null
    ) {
        $this->items = $items;
        $this->sumOfPositions = new Money(0);
        $this->status = $status ?? new Status();
    }

    /**
     * @throws \Exception
     */
    public function addItem(Item $item): void
    {
        if ($this->status->isCompleted()) {
            throw new \Exception("Cannot modify completed invoice");
        }

        $this->cantHaveMoreThan10Items();

        $this->sumOfPositionsCannotExceed10000($item->value);
    }

    /**
     * @throws \Exception
     */
    private function cantHaveMoreThan10Items(): void
    {
        if (count($this->items) === 10) {
            throw new \Exception("Invoice can't have more than 10 items");
        }
    }

    /**
     * @throws \Exception
     */
    private function sumOfPositionsCannotExceed10000(Money $increase): void
    {
        if ($this->sumOfPositions->add($increase) > new Money(10000, new Currency())) {
            throw new \Exception("Total value of an invoice cannot exceed 10000 PLN");
        }
    }
}

<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Domain\Invoice;

class InvoiceFactory
{
    public function create(): Invoice
    {
        $buyer = new Buyer('Buyer', 'John Buyer', new NIP("111222333"));
        $seller = new Seller('Seller', 'Fred Seller', new NIP("444555666"));
        $item1 = new Item('product1', new Quantity(1), new Money(10));
        $item2 = new Item('product2', new Quantity(1), new Money(20));
        $randomString = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZ', random_int(1, 10))), 1, 5);
        $number = new Number($randomString);
        return new Invoice($number, $seller, $buyer, [$item1, $item2]);
    }
}

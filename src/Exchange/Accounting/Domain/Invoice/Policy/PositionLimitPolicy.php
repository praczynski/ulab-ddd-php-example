<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Domain\Invoice\Policy;

interface PositionLimitPolicy
{
    public function lessEqualsLimit(int $positionCount): bool;
}

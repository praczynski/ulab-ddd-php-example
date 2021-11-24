<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Domain\Invoice\Policy;

class EurPositionLimitPolicy implements PositionLimitPolicy
{
    private const MAX_NUMBER_OF_POSITIONS = 5;

    public function lessEqualsLimit(int $positionCount): bool
    {
        return $positionCount > self::MAX_NUMBER_OF_POSITIONS;
    }
}

<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Domain\Invoice\Policy;

class PlnPositionLimitPolicy implements PositionLimitPolicy
{
    private const MAX_NUMBER_OF_POSITIONS = 10;

    public function lessEqualsLimit(int $positionCount): bool
    {
        return $positionCount > self::MAX_NUMBER_OF_POSITIONS;
    }
}

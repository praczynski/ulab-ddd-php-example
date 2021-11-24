<?php

declare(strict_types=1);

namespace Ulab\Exchange\Accounting\Domain\Invoice;

class Status
{
    /**
     * @param StatusEnum $status
     */
    public function __construct(private StatusEnum $status = StatusEnum::INCOMPLETED)
    {
    }

    public function isCompleted(): bool
    {
        return $this->status === StatusEnum::COMPLETED;
    }

    public function isEqual(Status $status): bool
    {
        return $this->status->name === $status->status->name;
    }
}

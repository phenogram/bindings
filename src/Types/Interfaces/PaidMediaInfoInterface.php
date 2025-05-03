<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes the paid media added to a message.
 */
interface PaidMediaInfoInterface extends TypeInterface
{
    /** @var int $starCount The number of Telegram Stars that must be paid to buy access to the media */
    public int $starCount { set; get; }

    /** @var array<PaidMediaInterface> $paidMedia Information about the paid media */
    public array $paidMedia { set; get; }
}

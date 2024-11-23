<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\PaidMediaInterface;

/**
 * Describes the paid media added to a message.
 */
class PaidMediaInfo implements Interfaces\PaidMediaInfoInterface
{
    /**
     * @param int                       $starCount The number of Telegram Stars that must be paid to buy access to the media
     * @param array<PaidMediaInterface> $paidMedia Information about the paid media
     */
    public function __construct(
        public int $starCount,
        public array $paidMedia,
    ) {
    }
}

<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\OwnedGiftInterface;

/**
 * Contains the list of gifts received and owned by a user or a chat.
 */
class OwnedGifts implements Interfaces\OwnedGiftsInterface
{
    /**
     * @param int                       $totalCount The total number of gifts owned by the user or the chat
     * @param array<OwnedGiftInterface> $gifts      The list of gifts
     * @param string|null               $nextOffset Optional. Offset for the next request. If empty, then there are no more results
     */
    public function __construct(
        public int $totalCount,
        public array $gifts,
        public ?string $nextOffset = null,
    ) {
    }
}

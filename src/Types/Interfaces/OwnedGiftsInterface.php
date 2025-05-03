<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Contains the list of gifts received and owned by a user or a chat.
 */
interface OwnedGiftsInterface extends TypeInterface
{
    /** @var int $totalCount The total number of gifts owned by the user or the chat */
    public int $totalCount { set; get; }

    /** @var array<OwnedGiftInterface> $gifts The list of gifts */
    public array $gifts { set; get; }

    /** @var string|null $nextOffset Optional. Offset for the next request. If empty, then there are no more results */
    public ?string $nextOffset { set; get; }
}

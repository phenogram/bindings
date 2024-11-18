<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents a gift that can be sent by the bot.
 */
class Gift implements TypeInterface
{
    /**
     * @param string   $id             Unique identifier of the gift
     * @param Sticker  $sticker        The sticker that represents the gift
     * @param int      $starCount      The number of Telegram Stars that must be paid to send the sticker
     * @param int|null $totalCount     Optional. The total number of the gifts of this type that can be sent; for limited gifts only
     * @param int|null $remainingCount Optional. The number of remaining gifts of this type that can be sent; for limited gifts only
     */
    public function __construct(
        public string $id,
        public Sticker $sticker,
        public int $starCount,
        public ?int $totalCount = null,
        public ?int $remainingCount = null,
    ) {
    }
}

<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\OwnedGiftsInterface;
use Phenogram\Bindings\Types\OwnedGifts;

class OwnedGiftsFactory extends AbstractFactory
{
    /**
     * Creates a new OwnedGifts instance with default fake data.
     *
     * @param int|null    $totalCount Optional. The total number of gifts owned by the user or the chat
     * @param array|null  $gifts      Optional. The list of gifts
     * @param string|null $nextOffset Optional. Optional. Offset for the next request. If empty, then there are no more results
     */
    public static function make(
        ?int $totalCount = null,
        ?array $gifts = null,
        ?string $nextOffset = null,
    ): OwnedGiftsInterface {
        return self::factory()->makeOwnedGifts(
            totalCount: $totalCount ?? self::fake()->randomNumber(),
            gifts: $gifts ?? [],
            nextOffset: $nextOffset,
        );
    }
}

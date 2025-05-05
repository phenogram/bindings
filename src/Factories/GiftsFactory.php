<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\GiftFactory as Gift;
use Phenogram\Bindings\Types\Gifts;
use Phenogram\Bindings\Types\Interfaces\GiftsInterface;

class GiftsFactory extends AbstractFactory
{
    /**
     * Creates a new Gifts instance with default fake data.
     *
     * @param array|null $gifts Optional. The list of gifts
     */
    public static function make(?array $gifts = null): GiftsInterface
    {
        return self::factory()->makeGifts(
            gifts: $gifts ?? array_map(fn () => Gift::make(), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}

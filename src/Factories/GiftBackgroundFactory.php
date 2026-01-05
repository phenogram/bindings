<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\GiftBackground;
use Phenogram\Bindings\Types\Interfaces\GiftBackgroundInterface;

class GiftBackgroundFactory extends AbstractFactory
{
    /**
     * Creates a new GiftBackground instance with default fake data.
     *
     * @param int|null $centerColor Optional. Center color of the background in RGB format
     * @param int|null $edgeColor   Optional. Edge color of the background in RGB format
     * @param int|null $textColor   Optional. Text color of the background in RGB format
     */
    public static function make(
        ?int $centerColor = null,
        ?int $edgeColor = null,
        ?int $textColor = null,
    ): GiftBackgroundInterface {
        return self::factory()->makeGiftBackground(
            centerColor: $centerColor ?? self::fake()->randomNumber(),
            edgeColor: $edgeColor ?? self::fake()->randomNumber(),
            textColor: $textColor ?? self::fake()->randomNumber(),
        );
    }
}

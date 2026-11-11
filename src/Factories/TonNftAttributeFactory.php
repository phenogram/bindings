<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\TonNftAttributeInterface;
use Phenogram\Bindings\Types\TonNftAttribute;

class TonNftAttributeFactory extends AbstractFactory
{
    /**
     * Creates a new TonNftAttribute instance with default fake data.
     *
     * @param string|null $traitType Optional. Trait type of the attribute
     * @param string|null $value     Optional. Value of the attribute
     */
    public static function make(?string $traitType = null, ?string $value = null): TonNftAttributeInterface
    {
        return self::factory()->makeTonNftAttribute(
            traitType: $traitType ?? self::fake()->text(50),
            value: $value ?? self::fake()->text(50),
        );
    }
}

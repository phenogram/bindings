<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichBlockAnchorInterface;
use Phenogram\Bindings\Types\RichBlockAnchor;

class RichBlockAnchorFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockAnchor instance with default fake data.
     *
     * @param string|null $type Optional. Type of the block, always “anchor”
     * @param string|null $name Optional. The name of the anchor
     */
    public static function make(?string $type = null, ?string $name = null): RichBlockAnchorInterface
    {
        return self::factory()->makeRichBlockAnchor(
            type: $type ?? self::fake()->word(),
            name: $name ?? self::fake()->text(50),
        );
    }
}

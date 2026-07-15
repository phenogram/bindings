<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockAnchor;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockAnchorInterface;

class InputRichBlockAnchorFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockAnchor instance with default fake data.
     *
     * @param string|null $type Optional. Type of the block, always “anchor”
     * @param string|null $name Optional. The name of the anchor
     */
    public static function make(?string $type = null, ?string $name = null): InputRichBlockAnchorInterface
    {
        return self::factory()->makeInputRichBlockAnchor(
            type: $type ?? self::fake()->word(),
            name: $name ?? self::fake()->text(50),
        );
    }
}

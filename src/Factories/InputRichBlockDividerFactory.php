<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockDivider;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockDividerInterface;

class InputRichBlockDividerFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockDivider instance with default fake data.
     *
     * @param string|null $type Optional. Type of the block, always “divider”
     */
    public static function make(?string $type = null): InputRichBlockDividerInterface
    {
        return self::factory()->makeInputRichBlockDivider(
            type: $type ?? self::fake()->word(),
        );
    }
}

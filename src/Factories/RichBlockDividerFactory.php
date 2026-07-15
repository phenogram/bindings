<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichBlockDividerInterface;
use Phenogram\Bindings\Types\RichBlockDivider;

class RichBlockDividerFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockDivider instance with default fake data.
     *
     * @param string|null $type Optional. Type of the block, always “divider”
     */
    public static function make(?string $type = null): RichBlockDividerInterface
    {
        return self::factory()->makeRichBlockDivider(
            type: $type ?? self::fake()->word(),
        );
    }
}

<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextAnchorInterface;
use Phenogram\Bindings\Types\RichTextAnchor;

class RichTextAnchorFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextAnchor instance with default fake data.
     *
     * @param string|null $type Optional. Type of the rich text, always “anchor”
     * @param string|null $name Optional. The name of the anchor
     */
    public static function make(?string $type = null, ?string $name = null): RichTextAnchorInterface
    {
        return self::factory()->makeRichTextAnchor(
            type: $type ?? self::fake()->word(),
            name: $name ?? self::fake()->text(50),
        );
    }
}

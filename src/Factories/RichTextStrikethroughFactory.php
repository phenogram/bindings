<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextStrikethroughInterface;
use Phenogram\Bindings\Types\RichTextStrikethrough;

class RichTextStrikethroughFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextStrikethrough instance with default fake data.
     *
     * @param string|null                                                              $type Optional. Type of the rich text, always “strikethrough”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text Optional. The text
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
    ): RichTextStrikethroughInterface {
        return self::factory()->makeRichTextStrikethrough(
            type: $type ?? 'strikethrough',
            text: $text ?? self::fake()->sentence(),
        );
    }
}

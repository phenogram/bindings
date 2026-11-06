<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextItalicInterface;
use Phenogram\Bindings\Types\RichTextItalic;

class RichTextItalicFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextItalic instance with default fake data.
     *
     * @param string|null                                                              $type Optional. Type of the rich text, always “italic”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text Optional. The text
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
    ): RichTextItalicInterface {
        return self::factory()->makeRichTextItalic(
            type: $type ?? 'italic',
            text: $text ?? self::fake()->sentence(),
        );
    }
}

<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextUnderlineInterface;
use Phenogram\Bindings\Types\RichTextUnderline;

class RichTextUnderlineFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextUnderline instance with default fake data.
     *
     * @param string|null                                                 $type Optional. Type of the rich text, always “underline”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text Optional. The text
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
    ): RichTextUnderlineInterface {
        return self::factory()->makeRichTextUnderline(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
        );
    }
}

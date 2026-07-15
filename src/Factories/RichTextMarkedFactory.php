<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextMarkedInterface;
use Phenogram\Bindings\Types\RichTextMarked;

class RichTextMarkedFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextMarked instance with default fake data.
     *
     * @param string|null                                                 $type Optional. Type of the rich text, always “marked”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text Optional. The text
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
    ): RichTextMarkedInterface {
        return self::factory()->makeRichTextMarked(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
        );
    }
}

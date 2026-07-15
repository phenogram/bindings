<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextSpoilerInterface;
use Phenogram\Bindings\Types\RichTextSpoiler;

class RichTextSpoilerFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextSpoiler instance with default fake data.
     *
     * @param string|null                                                 $type Optional. Type of the rich text, always “spoiler”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text Optional. The text
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
    ): RichTextSpoilerInterface {
        return self::factory()->makeRichTextSpoiler(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
        );
    }
}

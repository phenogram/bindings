<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextSuperscriptInterface;
use Phenogram\Bindings\Types\RichTextSuperscript;

class RichTextSuperscriptFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextSuperscript instance with default fake data.
     *
     * @param string|null                                                 $type Optional. Type of the rich text, always “superscript”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text Optional. The text
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
    ): RichTextSuperscriptInterface {
        return self::factory()->makeRichTextSuperscript(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
        );
    }
}

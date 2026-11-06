<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextSuperscriptInterface;
use Phenogram\Bindings\Types\RichTextSuperscript;

class RichTextSuperscriptFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextSuperscript instance with default fake data.
     *
     * @param string|null                                                              $type Optional. Type of the rich text, always “superscript”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text Optional. The text
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
    ): RichTextSuperscriptInterface {
        return self::factory()->makeRichTextSuperscript(
            type: $type ?? 'superscript',
            text: $text ?? self::fake()->sentence(),
        );
    }
}

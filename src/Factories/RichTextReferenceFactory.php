<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextReferenceInterface;
use Phenogram\Bindings\Types\RichTextReference;

class RichTextReferenceFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextReference instance with default fake data.
     *
     * @param string|null                                                              $type Optional. Type of the rich text, always “reference”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text Optional. Text of the reference
     * @param string|null                                                              $name Optional. The name of the reference
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
        ?string $name = null,
    ): RichTextReferenceInterface {
        return self::factory()->makeRichTextReference(
            type: $type ?? 'reference',
            text: $text ?? self::fake()->sentence(),
            name: $name ?? self::fake()->text(50),
        );
    }
}

<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextCodeInterface;
use Phenogram\Bindings\Types\RichTextCode;

class RichTextCodeFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextCode instance with default fake data.
     *
     * @param string|null                                                 $type Optional. Type of the rich text, always “code”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text Optional. The text
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
    ): RichTextCodeInterface {
        return self::factory()->makeRichTextCode(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
        );
    }
}

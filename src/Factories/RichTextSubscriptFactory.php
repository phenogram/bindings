<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextSubscriptInterface;
use Phenogram\Bindings\Types\RichTextSubscript;

class RichTextSubscriptFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextSubscript instance with default fake data.
     *
     * @param string|null                                                 $type Optional. Type of the rich text, always “subscript”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text Optional. The text
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
    ): RichTextSubscriptInterface {
        return self::factory()->makeRichTextSubscript(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
        );
    }
}

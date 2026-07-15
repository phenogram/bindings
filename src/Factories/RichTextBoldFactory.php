<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextBoldInterface;
use Phenogram\Bindings\Types\RichTextBold;

class RichTextBoldFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextBold instance with default fake data.
     *
     * @param string|null                                                 $type Optional. Type of the rich text, always “bold”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text Optional. The text
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
    ): RichTextBoldInterface {
        return self::factory()->makeRichTextBold(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
        );
    }
}

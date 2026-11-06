<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextBoldInterface;
use Phenogram\Bindings\Types\RichTextBold;

class RichTextBoldFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextBold instance with default fake data.
     *
     * @param string|null                                                              $type Optional. Type of the rich text, always “bold”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text Optional. The text
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
    ): RichTextBoldInterface {
        return self::factory()->makeRichTextBold(
            type: $type ?? 'bold',
            text: $text ?? self::fake()->sentence(),
        );
    }
}

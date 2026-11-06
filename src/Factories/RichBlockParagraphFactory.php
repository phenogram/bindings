<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichBlockParagraphInterface;
use Phenogram\Bindings\Types\RichBlockParagraph;

class RichBlockParagraphFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockParagraph instance with default fake data.
     *
     * @param string|null                                                              $type Optional. Type of the block, always “paragraph”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text Optional. Text of the block
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
    ): RichBlockParagraphInterface {
        return self::factory()->makeRichBlockParagraph(
            type: $type ?? 'paragraph',
            text: $text ?? self::fake()->sentence(),
        );
    }
}

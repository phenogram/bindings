<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockParagraph;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockParagraphInterface;

class InputRichBlockParagraphFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockParagraph instance with default fake data.
     *
     * @param string|null                                                 $type Optional. Type of the block, always “paragraph”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text Optional. Text of the block
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
    ): InputRichBlockParagraphInterface {
        return self::factory()->makeInputRichBlockParagraph(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
        );
    }
}

<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockThinking;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockThinkingInterface;

class InputRichBlockThinkingFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockThinking instance with default fake data.
     *
     * @param string|null                                                 $type Optional. Type of the block, always “thinking”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text Optional. Text of the block. See https://t.me/addemoji/AIActions for examples of custom emoji that are recommended for usage in the block.
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
    ): InputRichBlockThinkingInterface {
        return self::factory()->makeInputRichBlockThinking(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
        );
    }
}

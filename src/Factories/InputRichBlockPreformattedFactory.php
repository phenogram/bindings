<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockPreformatted;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockPreformattedInterface;

class InputRichBlockPreformattedFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockPreformatted instance with default fake data.
     *
     * @param string|null                                                 $type     Optional. Type of the block, always “pre”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text     Optional. Text of the block
     * @param string|null                                                 $language Optional. Optional. The programming language of the text
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
        ?string $language = null,
    ): InputRichBlockPreformattedInterface {
        return self::factory()->makeInputRichBlockPreformatted(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
            language: $language,
        );
    }
}

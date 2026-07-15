<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockFooter;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockFooterInterface;

class InputRichBlockFooterFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockFooter instance with default fake data.
     *
     * @param string|null                                                 $type Optional. Type of the block, always “footer”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text Optional. Text of the block
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
    ): InputRichBlockFooterInterface {
        return self::factory()->makeInputRichBlockFooter(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
        );
    }
}

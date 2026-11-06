<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockSectionHeading;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockSectionHeadingInterface;

class InputRichBlockSectionHeadingFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockSectionHeading instance with default fake data.
     *
     * @param string|null                                                              $type Optional. Type of the block, always “heading”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text Optional. Text of the block
     * @param int|null                                                                 $size Optional. Relative size of the text font; 1-6, 1 is the largest, 6 is the smallest
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
        ?int $size = null,
    ): InputRichBlockSectionHeadingInterface {
        return self::factory()->makeInputRichBlockSectionHeading(
            type: $type ?? 'heading',
            text: $text ?? self::fake()->sentence(),
            size: $size ?? self::fake()->randomNumber(),
        );
    }
}

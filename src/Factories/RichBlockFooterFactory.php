<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichBlockFooterInterface;
use Phenogram\Bindings\Types\RichBlockFooter;

class RichBlockFooterFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockFooter instance with default fake data.
     *
     * @param string|null                                                              $type Optional. Type of the block, always “footer”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text Optional. Text of the block
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
    ): RichBlockFooterInterface {
        return self::factory()->makeRichBlockFooter(
            type: $type ?? 'footer',
            text: $text ?? self::fake()->sentence(),
        );
    }
}

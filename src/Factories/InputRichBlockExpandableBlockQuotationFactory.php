<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockExpandableBlockQuotation;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockExpandableBlockQuotationInterface;

class InputRichBlockExpandableBlockQuotationFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockExpandableBlockQuotation instance with default fake data.
     *
     * @param string|null                                                              $type   Optional. Type of the block, always “expandable_blockquote”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text   Optional. Content of the block
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $credit Optional. Optional. Credit of the block
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $credit = null,
    ): InputRichBlockExpandableBlockQuotationInterface {
        return self::factory()->makeInputRichBlockExpandableBlockQuotation(
            type: $type ?? 'expandable_blockquote',
            text: $text ?? self::fake()->sentence(),
            credit: $credit,
        );
    }
}

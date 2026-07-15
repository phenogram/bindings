<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockPullQuotation;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockPullQuotationInterface;

class InputRichBlockPullQuotationFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockPullQuotation instance with default fake data.
     *
     * @param string|null                                                 $type   Optional. Type of the block, always “pullquote”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text   Optional. Text of the block
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $credit Optional. Optional. Credit of the block
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $credit = null,
    ): InputRichBlockPullQuotationInterface {
        return self::factory()->makeInputRichBlockPullQuotation(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
            credit: $credit,
        );
    }
}

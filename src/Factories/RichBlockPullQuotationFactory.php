<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichBlockPullQuotationInterface;
use Phenogram\Bindings\Types\RichBlockPullQuotation;

class RichBlockPullQuotationFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockPullQuotation instance with default fake data.
     *
     * @param string|null                                                 $type   Optional. Type of the block, always “pullquote”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text   Optional. Text of the block
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $credit Optional. Optional. Credit of the block
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $credit = null,
    ): RichBlockPullQuotationInterface {
        return self::factory()->makeRichBlockPullQuotation(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
            credit: $credit,
        );
    }
}

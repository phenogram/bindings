<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichBlockPullQuotationInterface;
use Phenogram\Bindings\Types\RichBlockPullQuotation;

class RichBlockPullQuotationFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockPullQuotation instance with default fake data.
     *
     * @param string|null                                                              $type   Optional. Type of the block, always “pullquote”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text   Optional. Text of the block
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $credit Optional. Optional. Credit of the block
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $credit = null,
    ): RichBlockPullQuotationInterface {
        return self::factory()->makeRichBlockPullQuotation(
            type: $type ?? 'pullquote',
            text: $text ?? self::fake()->sentence(),
            credit: $credit,
        );
    }
}

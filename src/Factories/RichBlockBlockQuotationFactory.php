<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichBlockBlockQuotationInterface;
use Phenogram\Bindings\Types\RichBlockBlockQuotation;

class RichBlockBlockQuotationFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockBlockQuotation instance with default fake data.
     *
     * @param string|null                                                 $type   Optional. Type of the block, always “blockquote”
     * @param array|null                                                  $blocks Optional. Content of the block
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $credit Optional. Optional. Credit of the block
     */
    public static function make(
        ?string $type = null,
        ?array $blocks = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $credit = null,
    ): RichBlockBlockQuotationInterface {
        return self::factory()->makeRichBlockBlockQuotation(
            type: $type ?? self::fake()->word(),
            blocks: $blocks ?? [],
            credit: $credit,
        );
    }
}

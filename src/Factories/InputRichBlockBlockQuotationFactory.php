<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockBlockQuotation;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockBlockQuotationInterface;

class InputRichBlockBlockQuotationFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockBlockQuotation instance with default fake data.
     *
     * @param string|null                                                 $type   Optional. Type of the block, always “blockquote”
     * @param array|null                                                  $blocks Optional. Content of the block
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $credit Optional. Optional. Credit of the block
     */
    public static function make(
        ?string $type = null,
        ?array $blocks = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $credit = null,
    ): InputRichBlockBlockQuotationInterface {
        return self::factory()->makeInputRichBlockBlockQuotation(
            type: $type ?? self::fake()->word(),
            blocks: $blocks ?? [],
            credit: $credit,
        );
    }
}

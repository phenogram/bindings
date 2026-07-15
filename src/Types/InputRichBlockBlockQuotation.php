<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputRichBlockInterface;
use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A block quotation, corresponding to the HTML tag <blockquote>.
 */
class InputRichBlockBlockQuotation extends InputRichBlock implements Interfaces\InputRichBlockBlockQuotationInterface
{
    /**
     * @param string                         $type   Type of the block, always “blockquote”
     * @param array<InputRichBlockInterface> $blocks Content of the block
     * @param RichTextInterface|null         $credit Optional. Credit of the block
     */
    public function __construct(
        public string $type,
        public array $blocks,
        public ?RichTextInterface $credit = null,
    ) {
    }
}

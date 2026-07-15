<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A quotation with centered text, loosely corresponding to the HTML tag <aside>.
 */
class InputRichBlockPullQuotation extends InputRichBlock implements Interfaces\InputRichBlockPullQuotationInterface
{
    /**
     * @param string                 $type   Type of the block, always “pullquote”
     * @param RichTextInterface      $text   Text of the block
     * @param RichTextInterface|null $credit Optional. Credit of the block
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
        public ?RichTextInterface $credit = null,
    ) {
    }
}

<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A block quotation, corresponding to the HTML tag <blockquote> with custom attribute "expandable".
 */
class RichBlockExpandableBlockQuotation extends RichBlock implements Interfaces\RichBlockExpandableBlockQuotationInterface
{
    /**
     * @param string                                     $type   Type of the block, always “expandable_blockquote”
     * @param RichTextInterface|string|array<mixed>      $text   Content of the block
     * @param RichTextInterface|string|array<mixed>|null $credit Optional. Credit of the block
     */
    public function __construct(
        public string $type,
        public RichTextInterface|string|array $text,
        public RichTextInterface|string|array|null $credit = null,
    ) {
    }
}

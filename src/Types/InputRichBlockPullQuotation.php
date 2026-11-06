<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A quotation with centered text, loosely corresponding to the HTML tag <aside>.
 */
class InputRichBlockPullQuotation extends InputRichBlock implements Interfaces\InputRichBlockPullQuotationInterface
{
    /**
     * @param string                                     $type   Type of the block, always “pullquote”
     * @param RichTextInterface|string|array<mixed>      $text   Text of the block
     * @param RichTextInterface|string|array<mixed>|null $credit Optional. Credit of the block
     */
    public function __construct(
        public string $type,
        public RichTextInterface|string|array $text,
        public RichTextInterface|string|array|null $credit = null,
    ) {
    }
}

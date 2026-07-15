<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A quotation with centered text, loosely corresponding to the HTML tag <aside>.
 */
interface RichBlockPullQuotationInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “pullquote” */
    public string $type { set; get; }

    /** @var RichTextInterface $text Text of the block */
    public RichTextInterface $text { set; get; }

    /** @var RichTextInterface|null $credit Optional. Credit of the block */
    public ?RichTextInterface $credit { set; get; }
}

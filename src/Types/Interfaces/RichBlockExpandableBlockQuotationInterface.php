<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block quotation, corresponding to the HTML tag <blockquote> with custom attribute "expandable".
 */
interface RichBlockExpandableBlockQuotationInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “expandable_blockquote” */
    public string $type { set; get; }

    /** @var RichTextInterface|string|array<mixed> $text Content of the block */
    public RichTextInterface|string|array $text { set; get; }

    /** @var RichTextInterface|string|array<mixed>|null $credit Optional. Credit of the block */
    public RichTextInterface|string|array|null $credit { set; get; }
}

<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A quotation with centered text, loosely corresponding to the HTML tag <aside>.
 */
interface InputRichBlockPullQuotationInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “pullquote” */
    public string $type { set; get; }

    /** @var RichTextInterface|string|array<mixed> $text Text of the block */
    public RichTextInterface|string|array $text { set; get; }

    /** @var RichTextInterface|string|array<mixed>|null $credit Optional. Credit of the block */
    public RichTextInterface|string|array|null $credit { set; get; }
}

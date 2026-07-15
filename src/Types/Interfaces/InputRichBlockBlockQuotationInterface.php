<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block quotation, corresponding to the HTML tag <blockquote>.
 */
interface InputRichBlockBlockQuotationInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “blockquote” */
    public string $type { set; get; }

    /** @var array<InputRichBlockInterface> $blocks Content of the block */
    public array $blocks { set; get; }

    /** @var RichTextInterface|null $credit Optional. Credit of the block */
    public ?RichTextInterface $credit { set; get; }
}

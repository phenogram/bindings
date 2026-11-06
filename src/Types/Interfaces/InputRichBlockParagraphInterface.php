<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A text paragraph, corresponding to the HTML tag <p>.
 */
interface InputRichBlockParagraphInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “paragraph” */
    public string $type { set; get; }

    /** @var RichTextInterface|string|array<mixed> $text Text of the block */
    public RichTextInterface|string|array $text { set; get; }
}

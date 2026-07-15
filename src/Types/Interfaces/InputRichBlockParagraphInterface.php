<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A text paragraph, corresponding to the HTML tag <p>.
 */
interface InputRichBlockParagraphInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “paragraph” */
    public string $type { set; get; }

    /** @var RichTextInterface $text Text of the block */
    public RichTextInterface $text { set; get; }
}

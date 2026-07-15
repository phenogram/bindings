<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A strikethrough text.
 */
interface RichTextStrikethroughInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “strikethrough” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }
}

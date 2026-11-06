<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * An italicized text.
 */
interface RichTextItalicInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “italic” */
    public string $type { set; get; }

    /** @var RichTextInterface|string|array<mixed> $text The text */
    public RichTextInterface|string|array $text { set; get; }
}

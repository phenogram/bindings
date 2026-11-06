<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * An underlined text.
 */
interface RichTextUnderlineInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “underline” */
    public string $type { set; get; }

    /** @var RichTextInterface|string|array<mixed> $text The text */
    public RichTextInterface|string|array $text { set; get; }
}

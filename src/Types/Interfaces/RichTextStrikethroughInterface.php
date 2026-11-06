<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A strikethrough text.
 */
interface RichTextStrikethroughInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “strikethrough” */
    public string $type { set; get; }

    /** @var RichTextInterface|string|array<mixed> $text The text */
    public RichTextInterface|string|array $text { set; get; }
}

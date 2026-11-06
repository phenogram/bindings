<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A bold text.
 */
interface RichTextBoldInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “bold” */
    public string $type { set; get; }

    /** @var RichTextInterface|string|array<mixed> $text The text */
    public RichTextInterface|string|array $text { set; get; }
}

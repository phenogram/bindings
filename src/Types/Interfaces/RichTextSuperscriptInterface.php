<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A superscript text.
 */
interface RichTextSuperscriptInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “superscript” */
    public string $type { set; get; }

    /** @var RichTextInterface|string|array<mixed> $text The text */
    public RichTextInterface|string|array $text { set; get; }
}

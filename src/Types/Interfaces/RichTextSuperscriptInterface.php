<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A superscript text.
 */
interface RichTextSuperscriptInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “superscript” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }
}

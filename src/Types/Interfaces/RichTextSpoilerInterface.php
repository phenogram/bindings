<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A text covered by a spoiler.
 */
interface RichTextSpoilerInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “spoiler” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }
}

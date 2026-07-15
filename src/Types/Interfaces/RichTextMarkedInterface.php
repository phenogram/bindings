<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A marked text.
 */
interface RichTextMarkedInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “marked” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }
}

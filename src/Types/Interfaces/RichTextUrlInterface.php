<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A text with a link.
 */
interface RichTextUrlInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “url” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }

    /** @var string $url URL of the link */
    public string $url { set; get; }
}

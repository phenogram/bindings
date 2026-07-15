<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A subscript text.
 */
interface RichTextSubscriptInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “subscript” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }
}

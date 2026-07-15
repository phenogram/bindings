<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * An anchor.
 */
interface RichTextAnchorInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “anchor” */
    public string $type { set; get; }

    /** @var string $name The name of the anchor */
    public string $name { set; get; }
}

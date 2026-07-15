<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A link to an anchor.
 */
interface RichTextAnchorLinkInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “anchor_link” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The link text */
    public RichTextInterface $text { set; get; }

    /** @var string $anchorName The name of the anchor. If the name is empty, then the link brings back to the top of the message. */
    public string $anchorName { set; get; }
}

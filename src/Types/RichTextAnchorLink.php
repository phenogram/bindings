<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A link to an anchor.
 */
class RichTextAnchorLink extends RichText implements Interfaces\RichTextAnchorLinkInterface
{
    /**
     * @param string            $type       Type of the rich text, always “anchor_link”
     * @param RichTextInterface $text       The link text
     * @param string            $anchorName The name of the anchor. If the name is empty, then the link brings back to the top of the message.
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
        public string $anchorName,
    ) {
    }
}

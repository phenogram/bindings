<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A mention by a username.
 */
class RichTextMention extends RichText implements Interfaces\RichTextMentionInterface
{
    /**
     * @param string            $type     Type of the rich text, always “mention”
     * @param RichTextInterface $text     The text
     * @param string            $username The username
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
        public string $username,
    ) {
    }
}

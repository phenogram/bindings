<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * A mention of a Telegram user by their identifier.
 */
class RichTextTextMention extends RichText implements Interfaces\RichTextTextMentionInterface
{
    /**
     * @param string            $type Type of the rich text, always “text_mention”
     * @param RichTextInterface $text The text
     * @param UserInterface     $user The mentioned user
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
        public UserInterface $user,
    ) {
    }
}

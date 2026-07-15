<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A mention of a Telegram user by their identifier.
 */
interface RichTextTextMentionInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “text_mention” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }

    /** @var UserInterface $user The mentioned user */
    public UserInterface $user { set; get; }
}

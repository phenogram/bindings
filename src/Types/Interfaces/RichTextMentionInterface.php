<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A mention by a username.
 */
interface RichTextMentionInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “mention” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }

    /** @var string $username The username */
    public string $username { set; get; }
}

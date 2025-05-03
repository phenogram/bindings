<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The reaction is based on a custom emoji.
 */
interface ReactionTypeCustomEmojiInterface extends TypeInterface
{
    /** @var string $type Type of the reaction, always “custom_emoji” */
    public string $type { set; get; }

    /** @var string $customEmojiId Custom emoji identifier */
    public string $customEmojiId { set; get; }
}

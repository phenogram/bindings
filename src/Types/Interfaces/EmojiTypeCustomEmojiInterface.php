<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A custom emoji.
 */
interface EmojiTypeCustomEmojiInterface extends TypeInterface
{
    /** @var string $type Type of the emoji, always “custom_emoji” */
    public string $type { set; get; }

    /** @var string $customEmojiId Identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker. */
    public string $customEmojiId { set; get; }
}

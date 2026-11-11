<?php

namespace Phenogram\Bindings\Types;

/**
 * A custom emoji.
 */
class EmojiTypeCustomEmoji extends EmojiType implements Interfaces\EmojiTypeCustomEmojiInterface
{
    /**
     * @param string $type          Type of the emoji, always “custom_emoji”
     * @param string $customEmojiId Identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker.
     */
    public function __construct(
        public string $type,
        public string $customEmojiId,
    ) {
    }
}

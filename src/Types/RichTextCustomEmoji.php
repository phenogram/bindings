<?php

namespace Phenogram\Bindings\Types;

/**
 * A custom emoji.
 */
class RichTextCustomEmoji extends RichText implements Interfaces\RichTextCustomEmojiInterface
{
    /**
     * @param string $type            Type of the rich text, always “custom_emoji”
     * @param string $customEmojiId   Unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker.
     * @param string $alternativeText Alternative emoji for the custom emoji
     */
    public function __construct(
        public string $type,
        public string $customEmojiId,
        public string $alternativeText,
    ) {
    }
}

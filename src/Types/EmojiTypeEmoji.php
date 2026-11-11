<?php

namespace Phenogram\Bindings\Types;

/**
 * A regular emoji.
 */
class EmojiTypeEmoji extends EmojiType implements Interfaces\EmojiTypeEmojiInterface
{
    /**
     * @param string $type  Type of the emoji, always “emoji”
     * @param string $emoji The emoji
     */
    public function __construct(
        public string $type,
        public string $emoji,
    ) {
    }
}

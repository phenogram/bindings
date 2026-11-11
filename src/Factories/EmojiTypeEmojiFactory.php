<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\EmojiTypeEmoji;
use Phenogram\Bindings\Types\Interfaces\EmojiTypeEmojiInterface;

class EmojiTypeEmojiFactory extends AbstractFactory
{
    /**
     * Creates a new EmojiTypeEmoji instance with default fake data.
     *
     * @param string|null $type  Optional. Type of the emoji, always “emoji”
     * @param string|null $emoji Optional. The emoji
     */
    public static function make(?string $type = null, ?string $emoji = null): EmojiTypeEmojiInterface
    {
        return self::factory()->makeEmojiTypeEmoji(
            type: $type ?? 'emoji',
            emoji: $emoji ?? '👍',
        );
    }
}

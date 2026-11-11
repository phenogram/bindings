<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\EmojiTypeCustomEmoji;
use Phenogram\Bindings\Types\Interfaces\EmojiTypeCustomEmojiInterface;

class EmojiTypeCustomEmojiFactory extends AbstractFactory
{
    /**
     * Creates a new EmojiTypeCustomEmoji instance with default fake data.
     *
     * @param string|null $type          Optional. Type of the emoji, always “custom_emoji”
     * @param string|null $customEmojiId Optional. Identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker.
     */
    public static function make(?string $type = null, ?string $customEmojiId = null): EmojiTypeCustomEmojiInterface
    {
        return self::factory()->makeEmojiTypeCustomEmoji(
            type: $type ?? 'custom_emoji',
            customEmojiId: $customEmojiId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
        );
    }
}

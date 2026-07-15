<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextCustomEmojiInterface;
use Phenogram\Bindings\Types\RichTextCustomEmoji;

class RichTextCustomEmojiFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextCustomEmoji instance with default fake data.
     *
     * @param string|null $type            Optional. Type of the rich text, always “custom_emoji”
     * @param string|null $customEmojiId   Optional. Unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker.
     * @param string|null $alternativeText Optional. Alternative emoji for the custom emoji
     */
    public static function make(
        ?string $type = null,
        ?string $customEmojiId = null,
        ?string $alternativeText = null,
    ): RichTextCustomEmojiInterface {
        return self::factory()->makeRichTextCustomEmoji(
            type: $type ?? self::fake()->word(),
            customEmojiId: $customEmojiId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            alternativeText: $alternativeText ?? self::fake()->text(50),
        );
    }
}

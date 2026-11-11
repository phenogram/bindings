<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\ChatShareThemeEmoji;
use Phenogram\Bindings\Types\Interfaces\ChatShareThemeEmojiInterface;

class ChatShareThemeEmojiFactory extends AbstractFactory
{
    /**
     * Creates a new ChatShareThemeEmoji instance with default fake data.
     *
     * @param string|null $type                 Optional. Type of the theme, always “emoji”
     * @param array|null  $emojis               Optional. The emoji; 0-6 regular or custom emoji
     * @param int|null    $backgroundBackdropId Optional. Optional. Identifier of the backdrop used as the background; omitted if the default background is used. Use getChatShareThemeBackdrops to get details about the backdrop.
     */
    public static function make(
        ?string $type = null,
        ?array $emojis = null,
        ?int $backgroundBackdropId = null,
    ): ChatShareThemeEmojiInterface {
        return self::factory()->makeChatShareThemeEmoji(
            type: $type ?? 'emoji',
            emojis: $emojis ?? [EmojiTypeEmojiFactory::make()],
            backgroundBackdropId: $backgroundBackdropId,
        );
    }
}

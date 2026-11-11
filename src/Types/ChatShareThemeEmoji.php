<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\EmojiTypeInterface;

/**
 * The theme with emoji placed on a background.
 */
class ChatShareThemeEmoji extends ChatShareTheme implements Interfaces\ChatShareThemeEmojiInterface
{
    /**
     * @param string                    $type                 Type of the theme, always “emoji”
     * @param array<EmojiTypeInterface> $emojis               The emoji; 0-6 regular or custom emoji
     * @param int|null                  $backgroundBackdropId Optional. Identifier of the backdrop used as the background; omitted if the default background is used. Use getChatShareThemeBackdrops to get details about the backdrop.
     */
    public function __construct(
        public string $type,
        public array $emojis,
        public ?int $backgroundBackdropId = null,
    ) {
    }
}

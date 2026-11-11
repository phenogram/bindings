<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The theme with emoji placed on a background.
 */
interface ChatShareThemeEmojiInterface extends TypeInterface
{
    /** @var string $type Type of the theme, always “emoji” */
    public string $type { set; get; }

    /** @var array<EmojiTypeInterface> $emojis The emoji; 0-6 regular or custom emoji */
    public array $emojis { set; get; }

    /** @var int|null $backgroundBackdropId Optional. Identifier of the backdrop used as the background; omitted if the default background is used. Use getChatShareThemeBackdrops to get details about the backdrop. */
    public ?int $backgroundBackdropId { set; get; }
}

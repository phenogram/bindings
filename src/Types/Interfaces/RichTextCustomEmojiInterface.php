<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A custom emoji.
 */
interface RichTextCustomEmojiInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “custom_emoji” */
    public string $type { set; get; }

    /** @var string $customEmojiId Unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker. */
    public string $customEmojiId { set; get; }

    /** @var string $alternativeText Alternative emoji for the custom emoji */
    public string $alternativeText { set; get; }
}

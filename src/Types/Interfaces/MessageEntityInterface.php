<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 */
interface MessageEntityInterface extends TypeInterface
{
    /** @var string $type Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag or #hashtag@chatusername), “cashtag” ($USD or $USD@chatusername), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “expandable_blockquote” (collapsed-by-default block quotation), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers) */
    public string $type { set; get; }

    /** @var int $offset Offset in UTF-16 code units to the start of the entity */
    public int $offset { set; get; }

    /** @var int $length Length of the entity in UTF-16 code units */
    public int $length { set; get; }

    /** @var string|null $url Optional. For “text_link” only, URL that will be opened after user taps on the text */
    public ?string $url { set; get; }

    /** @var UserInterface|null $user Optional. For “text_mention” only, the mentioned user */
    public ?UserInterface $user { set; get; }

    /** @var string|null $language Optional. For “pre” only, the programming language of the entity text */
    public ?string $language { set; get; }

    /** @var string|null $customEmojiId Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker */
    public ?string $customEmojiId { set; get; }
}

<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\MessageEntity;

class MessageEntityFactory extends AbstractFactory
{
    /**
     * Creates a new MessageEntity instance with default fake data.
     *
     * @param string|null        $type          Optional. Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag or #hashtag@chatusername), “cashtag” ($USD or $USD@chatusername), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “expandable_blockquote” (collapsed-by-default block quotation), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers)
     * @param int|null           $offset        Optional. Offset in UTF-16 code units to the start of the entity
     * @param int|null           $length        Optional. Length of the entity in UTF-16 code units
     * @param string|null        $url           Optional. Optional. For “text_link” only, URL that will be opened after user taps on the text
     * @param UserInterface|null $user          Optional. Optional. For “text_mention” only, the mentioned user
     * @param string|null        $language      Optional. Optional. For “pre” only, the programming language of the entity text
     * @param string|null        $customEmojiId Optional. Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker
     */
    public static function make(
        ?string $type = null,
        ?int $offset = null,
        ?int $length = null,
        ?string $url = null,
        ?UserInterface $user = null,
        ?string $language = null,
        ?string $customEmojiId = null,
    ): MessageEntityInterface {
        return self::factory()->makeMessageEntity(
            type: $type ?? self::fake()->randomElement(['mention', 'hashtag', 'cashtag', 'bot_command', 'url', 'email', 'phone_number', 'bold', 'italic', 'underline', 'strikethrough', 'code', 'pre', 'text_link', 'text_mention', 'custom_emoji']),
            offset: $offset ?? self::fake()->numberBetween(0, 100),
            length: $length ?? self::fake()->numberBetween(0, 100),
            url: $url,
            user: $user,
            language: $language,
            customEmojiId: $customEmojiId,
        );
    }
}

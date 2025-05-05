<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\ChatShared;
use Phenogram\Bindings\Types\Interfaces\ChatSharedInterface;

class ChatSharedFactory extends AbstractFactory
{
    /**
     * Creates a new ChatShared instance with default fake data.
     *
     * @param int|null    $requestId Optional. Identifier of the request
     * @param int|null    $chatId    Optional. Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
     * @param string|null $title     Optional. Optional. Title of the chat, if the title was requested by the bot.
     * @param string|null $username  Optional. Optional. Username of the chat, if the username was requested by the bot and available.
     * @param array|null  $photo     Optional. Optional. Available sizes of the chat photo, if the photo was requested by the bot
     */
    public static function make(
        ?int $requestId = null,
        ?int $chatId = null,
        ?string $title = null,
        ?string $username = null,
        ?array $photo = null,
    ): ChatSharedInterface {
        return self::factory()->makeChatShared(
            requestId: $requestId ?? self::fake()->numberBetween(100000, 999999999),
            chatId: $chatId ?? self::fake()->numberBetween(100000, 999999999),
            title: $title,
            username: $username,
            photo: $photo,
        );
    }
}

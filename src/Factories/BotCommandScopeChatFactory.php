<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BotCommandScopeChat;
use Phenogram\Bindings\Types\Interfaces\BotCommandScopeChatInterface;

class BotCommandScopeChatFactory extends AbstractFactory
{
    /**
     * Creates a new BotCommandScopeChat instance with default fake data.
     *
     * @param string|null     $type   Optional. Scope type, must be chat
     * @param int|string|null $chatId Optional. Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername). Channel direct messages chats and channel chats aren't supported.
     */
    public static function make(?string $type = null, int|string|null $chatId = null): BotCommandScopeChatInterface
    {
        return self::factory()->makeBotCommandScopeChat(
            type: $type ?? self::fake()->word(),
            chatId: $chatId ?? self::fake()->numberBetween(100000, 999999999),
        );
    }
}

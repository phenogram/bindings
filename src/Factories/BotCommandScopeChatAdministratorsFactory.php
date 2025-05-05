<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BotCommandScopeChatAdministrators;
use Phenogram\Bindings\Types\Interfaces\BotCommandScopeChatAdministratorsInterface;

class BotCommandScopeChatAdministratorsFactory extends AbstractFactory
{
    /**
     * Creates a new BotCommandScopeChatAdministrators instance with default fake data.
     *
     * @param string|null     $type   Optional. Scope type, must be chat_administrators
     * @param int|string|null $chatId Optional. Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    public static function make(
        ?string $type = null,
        int|string|null $chatId = null,
    ): BotCommandScopeChatAdministratorsInterface {
        return self::factory()->makeBotCommandScopeChatAdministrators(
            type: $type ?? self::fake()->word(),
            chatId: $chatId ?? self::fake()->numberBetween(100000, 999999999),
        );
    }
}

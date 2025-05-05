<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BotCommandScopeAllPrivateChats;
use Phenogram\Bindings\Types\Interfaces\BotCommandScopeAllPrivateChatsInterface;

class BotCommandScopeAllPrivateChatsFactory extends AbstractFactory
{
    /**
     * Creates a new BotCommandScopeAllPrivateChats instance with default fake data.
     *
     * @param string|null $type Optional. Scope type, must be all_private_chats
     */
    public static function make(?string $type = null): BotCommandScopeAllPrivateChatsInterface
    {
        return self::factory()->makeBotCommandScopeAllPrivateChats(
            type: $type ?? self::fake()->word(),
        );
    }
}

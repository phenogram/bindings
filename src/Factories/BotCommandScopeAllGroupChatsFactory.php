<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BotCommandScopeAllGroupChats;
use Phenogram\Bindings\Types\Interfaces\BotCommandScopeAllGroupChatsInterface;

class BotCommandScopeAllGroupChatsFactory extends AbstractFactory
{
    /**
     * Creates a new BotCommandScopeAllGroupChats instance with default fake data.
     *
     * @param string|null $type Optional. Scope type, must be all_group_chats
     */
    public static function make(?string $type = null): BotCommandScopeAllGroupChatsInterface
    {
        return self::factory()->makeBotCommandScopeAllGroupChats(
            type: $type ?? self::fake()->word(),
        );
    }
}

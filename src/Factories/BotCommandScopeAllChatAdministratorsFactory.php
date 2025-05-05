<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BotCommandScopeAllChatAdministrators;
use Phenogram\Bindings\Types\Interfaces\BotCommandScopeAllChatAdministratorsInterface;

class BotCommandScopeAllChatAdministratorsFactory extends AbstractFactory
{
    /**
     * Creates a new BotCommandScopeAllChatAdministrators instance with default fake data.
     *
     * @param string|null $type Optional. Scope type, must be all_chat_administrators
     */
    public static function make(?string $type = null): BotCommandScopeAllChatAdministratorsInterface
    {
        return self::factory()->makeBotCommandScopeAllChatAdministrators(
            type: $type ?? self::fake()->word(),
        );
    }
}

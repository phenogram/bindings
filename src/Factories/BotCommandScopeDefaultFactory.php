<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BotCommandScopeDefault;
use Phenogram\Bindings\Types\Interfaces\BotCommandScopeDefaultInterface;

class BotCommandScopeDefaultFactory extends AbstractFactory
{
    /**
     * Creates a new BotCommandScopeDefault instance with default fake data.
     *
     * @param string|null $type Optional. Scope type, must be default
     */
    public static function make(?string $type = null): BotCommandScopeDefaultInterface
    {
        return self::factory()->makeBotCommandScopeDefault(
            type: $type ?? self::fake()->word(),
        );
    }
}

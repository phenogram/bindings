<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BotName;
use Phenogram\Bindings\Types\Interfaces\BotNameInterface;

class BotNameFactory extends AbstractFactory
{
    /**
     * Creates a new BotName instance with default fake data.
     *
     * @param string|null $name Optional. The bot's name
     */
    public static function make(?string $name = null): BotNameInterface
    {
        return self::factory()->makeBotName(
            name: $name ?? self::fake()->text(50),
        );
    }
}

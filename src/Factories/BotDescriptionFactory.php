<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BotDescription;
use Phenogram\Bindings\Types\Interfaces\BotDescriptionInterface;

class BotDescriptionFactory extends AbstractFactory
{
    /**
     * Creates a new BotDescription instance with default fake data.
     *
     * @param string|null $description Optional. The bot's description
     */
    public static function make(?string $description = null): BotDescriptionInterface
    {
        return self::factory()->makeBotDescription(
            description: $description ?? self::fake()->sentence(),
        );
    }
}

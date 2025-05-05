<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BotShortDescription;
use Phenogram\Bindings\Types\Interfaces\BotShortDescriptionInterface;

class BotShortDescriptionFactory extends AbstractFactory
{
    /**
     * Creates a new BotShortDescription instance with default fake data.
     *
     * @param string|null $shortDescription Optional. The bot's short description
     */
    public static function make(?string $shortDescription = null): BotShortDescriptionInterface
    {
        return self::factory()->makeBotShortDescription(
            shortDescription: $shortDescription ?? self::fake()->text(50),
        );
    }
}

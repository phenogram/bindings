<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BotAccessSettings;
use Phenogram\Bindings\Types\Interfaces\BotAccessSettingsInterface;

class BotAccessSettingsFactory extends AbstractFactory
{
    /**
     * Creates a new BotAccessSettings instance with default fake data.
     *
     * @param bool|null  $isAccessRestricted Optional. True, if only selected users can access the bot. The bot's owner can always access it.
     * @param array|null $addedUsers         Optional. Optional. The list of other users who have access to the bot if the access is restricted
     */
    public static function make(?bool $isAccessRestricted = null, ?array $addedUsers = null): BotAccessSettingsInterface
    {
        return self::factory()->makeBotAccessSettings(
            isAccessRestricted: $isAccessRestricted ?? self::fake()->boolean(),
            addedUsers: $addedUsers,
        );
    }
}

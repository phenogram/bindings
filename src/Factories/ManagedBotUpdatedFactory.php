<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\ManagedBotUpdatedInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\ManagedBotUpdated;

class ManagedBotUpdatedFactory extends AbstractFactory
{
    /**
     * Creates a new ManagedBotUpdated instance with default fake data.
     *
     * @param UserInterface|null $user Optional. User that created the bot
     * @param UserInterface|null $bot  Optional. Information about the bot. Token of the bot can be fetched using the method getManagedBotToken.
     */
    public static function make(?UserInterface $user = null, ?UserInterface $bot = null): ManagedBotUpdatedInterface
    {
        return self::factory()->makeManagedBotUpdated(
            user: $user ?? User::make(),
            bot: $bot ?? User::make(),
        );
    }
}

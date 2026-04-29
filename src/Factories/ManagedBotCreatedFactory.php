<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\ManagedBotCreatedInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\ManagedBotCreated;

class ManagedBotCreatedFactory extends AbstractFactory
{
    /**
     * Creates a new ManagedBotCreated instance with default fake data.
     *
     * @param UserInterface|null $bot Optional. Information about the bot. The bot's token can be fetched using the method getManagedBotToken.
     */
    public static function make(?UserInterface $bot = null): ManagedBotCreatedInterface
    {
        return self::factory()->makeManagedBotCreated(
            bot: $bot ?? User::make(),
        );
    }
}

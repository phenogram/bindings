<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about the bot that was created to be managed by the current bot.
 */
interface ManagedBotCreatedInterface extends TypeInterface
{
    /** @var UserInterface $bot Information about the bot. The bot's token can be fetched using the method getManagedBotToken. */
    public UserInterface $bot { set; get; }
}

<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about the creation, token update, or owner update of a bot that is managed by the current bot.
 */
interface ManagedBotUpdatedInterface extends TypeInterface
{
    /** @var UserInterface $user User that created the bot */
    public UserInterface $user { set; get; }

    /** @var UserInterface $bot Information about the bot. Token of the bot can be fetched using the method getManagedBotToken. */
    public UserInterface $bot { set; get; }
}

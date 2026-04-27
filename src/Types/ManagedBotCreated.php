<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * This object contains information about the bot that was created to be managed by the current bot.
 */
class ManagedBotCreated implements Interfaces\ManagedBotCreatedInterface
{
    /**
     * @param UserInterface $bot Information about the bot. The bot's token can be fetched using the method getManagedBotToken.
     */
    public function __construct(
        public UserInterface $bot,
    ) {
    }
}

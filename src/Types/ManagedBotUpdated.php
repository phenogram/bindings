<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * This object contains information about the creation, token update, or owner update of a bot that is managed by the current bot.
 */
class ManagedBotUpdated implements Interfaces\ManagedBotUpdatedInterface
{
    /**
     * @param UserInterface $user User that created the bot
     * @param UserInterface $bot  Information about the bot. Token of the bot can be fetched using the method getManagedBotToken.
     */
    public function __construct(
        public UserInterface $user,
        public UserInterface $bot,
    ) {
    }
}

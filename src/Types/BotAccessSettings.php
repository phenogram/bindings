<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * This object describes the access settings of a bot.
 */
class BotAccessSettings implements Interfaces\BotAccessSettingsInterface
{
    /**
     * @param bool                      $isAccessRestricted True, if only selected users can access the bot. The bot's owner can always access it.
     * @param array<UserInterface>|null $addedUsers         Optional. The list of other users who have access to the bot if the access is restricted
     */
    public function __construct(
        public bool $isAccessRestricted,
        public ?array $addedUsers = null,
    ) {
    }
}

<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes the access settings of a bot.
 */
interface BotAccessSettingsInterface extends TypeInterface
{
    /** @var bool $isAccessRestricted True, if only selected users can access the bot. The bot's owner can always access it. */
    public bool $isAccessRestricted { set; get; }

    /** @var array<UserInterface>|null $addedUsers Optional. The list of other users who have access to the bot if the access is restricted */
    public ?array $addedUsers { set; get; }
}

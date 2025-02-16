<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a list of boosts added to a chat by a user.
 */
interface UserChatBoostsInterface extends TypeInterface
{
    /** @var array<ChatBoostInterface> $boosts The list of boosts added to the chat by the user */
    public array $boosts { set; }
}

<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatBoostInterface;

/**
 * This object represents a list of boosts added to a chat by a user.
 */
class UserChatBoosts implements Interfaces\UserChatBoostsInterface
{
    /**
     * @param array<ChatBoostInterface> $boosts The list of boosts added to the chat by the user
     */
    public function __construct(
        public array $boosts,
    ) {
    }
}

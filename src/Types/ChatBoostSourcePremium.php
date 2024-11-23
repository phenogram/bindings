<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * The boost was obtained by subscribing to Telegram Premium or by gifting a Telegram Premium subscription to another user.
 */
class ChatBoostSourcePremium extends ChatBoostSource implements Interfaces\ChatBoostSourcePremiumInterface
{
    /**
     * @param string        $source Source of the boost, always “premium”
     * @param UserInterface $user   User that boosted the chat
     */
    public function __construct(
        public string $source,
        public UserInterface $user,
    ) {
    }
}

<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The boost was obtained by subscribing to Telegram Premium or by gifting a Telegram Premium subscription to another user.
 */
interface ChatBoostSourcePremiumInterface extends TypeInterface
{
    /** @var string $source Source of the boost, always “premium” */
    public string $source { set; }

    /** @var UserInterface $user User that boosted the chat */
    public UserInterface $user { set; }
}

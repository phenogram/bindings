<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a service message about a user boosting a chat.
 */
interface ChatBoostAddedInterface extends TypeInterface
{
    /** @var int $boostCount Number of boosts added by the user */
    public int $boostCount { set; get; }
}

<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents a service message about a user boosting a chat.
 */
class ChatBoostAdded implements Interfaces\ChatBoostAddedInterface
{
    /**
     * @param int $boostCount Number of boosts added by the user
     */
    public function __construct(
        public int $boostCount,
    ) {
    }
}

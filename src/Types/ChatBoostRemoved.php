<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatBoostSourceInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;

/**
 * This object represents a boost removed from a chat.
 */
class ChatBoostRemoved implements Interfaces\ChatBoostRemovedInterface
{
    /**
     * @param ChatInterface            $chat       Chat which was boosted
     * @param string                   $boostId    Unique identifier of the boost
     * @param int                      $removeDate Point in time (Unix timestamp) when the boost was removed
     * @param ChatBoostSourceInterface $source     Source of the removed boost
     */
    public function __construct(
        public ChatInterface $chat,
        public string $boostId,
        public int $removeDate,
        public ChatBoostSourceInterface $source,
    ) {
    }
}

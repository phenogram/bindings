<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatBoostInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;

/**
 * This object represents a boost added to a chat or changed.
 */
class ChatBoostUpdated implements Interfaces\ChatBoostUpdatedInterface
{
    /**
     * @param ChatInterface      $chat  Chat which was boosted
     * @param ChatBoostInterface $boost Information about the chat boost
     */
    public function __construct(
        public ChatInterface $chat,
        public ChatBoostInterface $boost,
    ) {
    }
}

<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatBoostFactory as ChatBoost;
use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Types\ChatBoostUpdated;
use Phenogram\Bindings\Types\Interfaces\ChatBoostInterface;
use Phenogram\Bindings\Types\Interfaces\ChatBoostUpdatedInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;

class ChatBoostUpdatedFactory extends AbstractFactory
{
    /**
     * Creates a new ChatBoostUpdated instance with default fake data.
     *
     * @param ChatInterface|null      $chat  Optional. Chat which was boosted
     * @param ChatBoostInterface|null $boost Optional. Information about the chat boost
     */
    public static function make(
        ?ChatInterface $chat = null,
        ?ChatBoostInterface $boost = null,
    ): ChatBoostUpdatedInterface {
        return self::factory()->makeChatBoostUpdated(
            chat: $chat ?? Chat::make(),
            boost: $boost ?? ChatBoost::make(),
        );
    }
}

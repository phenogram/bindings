<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Types\ChatBoostRemoved;
use Phenogram\Bindings\Types\Interfaces\ChatBoostRemovedInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;

class ChatBoostRemovedFactory extends AbstractFactory
{
    /**
     * Creates a new ChatBoostRemoved instance with default fake data.
     *
     * @param ChatInterface|null                                                 $chat       Optional. Chat which was boosted
     * @param string|null                                                        $boostId    Optional. Unique identifier of the boost
     * @param int|null                                                           $removeDate Optional. Point in time (Unix timestamp) when the boost was removed
     * @param \Phenogram\Bindings\Types\Interfaces\ChatBoostSourceInterface|null $source     Optional. Source of the removed boost
     */
    public static function make(
        ?ChatInterface $chat = null,
        ?string $boostId = null,
        ?int $removeDate = null,
        ?\Phenogram\Bindings\Types\Interfaces\ChatBoostSourceInterface $source = null,
    ): ChatBoostRemovedInterface {
        return self::factory()->makeChatBoostRemoved(
            chat: $chat ?? Chat::make(),
            boostId: $boostId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            removeDate: $removeDate ?? self::fake()->unixTime(),
            source: $source ?? '[Abstract type: ChatBoostSource]',
        );
    }
}

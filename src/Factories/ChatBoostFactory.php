<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\ChatBoost;
use Phenogram\Bindings\Types\Interfaces\ChatBoostInterface;

class ChatBoostFactory extends AbstractFactory
{
    /**
     * Creates a new ChatBoost instance with default fake data.
     *
     * @param string|null                                                        $boostId        Optional. Unique identifier of the boost
     * @param int|null                                                           $addDate        Optional. Point in time (Unix timestamp) when the chat was boosted
     * @param int|null                                                           $expirationDate Optional. Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged
     * @param \Phenogram\Bindings\Types\Interfaces\ChatBoostSourceInterface|null $source         Optional. Source of the added boost
     */
    public static function make(
        ?string $boostId = null,
        ?int $addDate = null,
        ?int $expirationDate = null,
        ?\Phenogram\Bindings\Types\Interfaces\ChatBoostSourceInterface $source = null,
    ): ChatBoostInterface {
        return self::factory()->makeChatBoost(
            boostId: $boostId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            addDate: $addDate ?? self::fake()->unixTime(),
            expirationDate: $expirationDate ?? self::fake()->unixTime(),
            source: $source ?? '[Abstract type: ChatBoostSource]',
        );
    }
}

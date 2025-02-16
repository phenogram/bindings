<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about a chat boost.
 */
interface ChatBoostInterface extends TypeInterface
{
    /** @var string $boostId Unique identifier of the boost */
    public string $boostId { set; }

    /** @var int $addDate Point in time (Unix timestamp) when the chat was boosted */
    public int $addDate { set; }

    /** @var int $expirationDate Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged */
    public int $expirationDate { set; }

    /** @var ChatBoostSourceInterface $source Source of the added boost */
    public ChatBoostSourceInterface $source { set; }
}

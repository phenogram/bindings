<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a boost removed from a chat.
 */
interface ChatBoostRemovedInterface extends TypeInterface
{
	/** @var ChatInterface $chat Chat which was boosted */
	public ChatInterface $chat { set; get; }

	/** @var string $boostId Unique identifier of the boost */
	public string $boostId { set; get; }

	/** @var int $removeDate Point in time (Unix timestamp) when the boost was removed */
	public int $removeDate { set; get; }

	/** @var ChatBoostSourceInterface $source Source of the removed boost */
	public ChatBoostSourceInterface $source { set; get; }
}

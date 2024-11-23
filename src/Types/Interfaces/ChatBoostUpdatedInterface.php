<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a boost added to a chat or changed.
 */
interface ChatBoostUpdatedInterface extends TypeInterface
{
	/** @var ChatInterface $chat Chat which was boosted */
	public ChatInterface $chat { set; get; }

	/** @var ChatBoostInterface $boost Information about the chat boost */
	public ChatBoostInterface $boost { set; get; }
}

<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a reaction added to a message along with the number of times it was added.
 */
interface ReactionCountInterface extends TypeInterface
{
	/** @var ReactionTypeInterface $type Type of the reaction */
	public ReactionTypeInterface $type { set; get; }

	/** @var int $totalCount Number of times the reaction was added */
	public int $totalCount { set; get; }
}

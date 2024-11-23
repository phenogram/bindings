<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents an animated emoji that displays a random value.
 */
interface DiceInterface extends TypeInterface
{
	/** @var string $emoji Emoji on which the dice throw animation is based */
	public string $emoji { set; get; }

	/** @var int $value Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji */
	public int $value { set; get; }
}

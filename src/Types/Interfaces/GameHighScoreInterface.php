<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents one row of the high scores table for a game.
 */
interface GameHighScoreInterface extends TypeInterface
{
	/** @var int $position Position in high score table for the game */
	public int $position { set; get; }

	/** @var UserInterface $user User */
	public UserInterface $user { set; get; }

	/** @var int $score Score */
	public int $score { set; get; }
}

<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * This object represents one row of the high scores table for a game.
 */
class GameHighScore implements Interfaces\GameHighScoreInterface
{
    /**
     * @param int           $position Position in high score table for the game
     * @param UserInterface $user     User
     * @param int           $score    Score
     */
    public function __construct(
        public int $position,
        public UserInterface $user,
        public int $score,
    ) {
    }
}

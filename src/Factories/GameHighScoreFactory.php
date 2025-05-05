<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\GameHighScore;
use Phenogram\Bindings\Types\Interfaces\GameHighScoreInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class GameHighScoreFactory extends AbstractFactory
{
    /**
     * Creates a new GameHighScore instance with default fake data.
     *
     * @param int|null           $position Optional. Position in high score table for the game
     * @param UserInterface|null $user     Optional. User
     * @param int|null           $score    Optional. Score
     */
    public static function make(
        ?int $position = null,
        ?UserInterface $user = null,
        ?int $score = null,
    ): GameHighScoreInterface {
        return self::factory()->makeGameHighScore(
            position: $position ?? self::fake()->randomNumber(),
            user: $user ?? User::make(),
            score: $score ?? self::fake()->randomNumber(),
        );
    }
}

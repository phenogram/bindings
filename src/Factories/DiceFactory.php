<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Dice;
use Phenogram\Bindings\Types\Interfaces\DiceInterface;

class DiceFactory extends AbstractFactory
{
    /**
     * Creates a new Dice instance with default fake data.
     *
     * @param string|null $emoji Optional. Emoji on which the dice throw animation is based
     * @param int|null    $value Optional. Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji
     */
    public static function make(?string $emoji = null, ?int $value = null): DiceInterface
    {
        return self::factory()->makeDice(
            emoji: $emoji ?? self::fake()->text(50),
            value: $value ?? self::fake()->randomNumber(),
        );
    }
}

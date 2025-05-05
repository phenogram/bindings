<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\KeyboardButtonPollTypeInterface;
use Phenogram\Bindings\Types\KeyboardButtonPollType;

class KeyboardButtonPollTypeFactory extends AbstractFactory
{
    /**
     * Creates a new KeyboardButtonPollType instance with default fake data.
     *
     * @param string|null $type Optional. Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode. If regular is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
     */
    public static function make(?string $type = null): KeyboardButtonPollTypeInterface
    {
        return self::factory()->makeKeyboardButtonPollType(
            type: $type,
        );
    }
}

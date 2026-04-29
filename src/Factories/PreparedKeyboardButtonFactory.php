<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PreparedKeyboardButtonInterface;
use Phenogram\Bindings\Types\PreparedKeyboardButton;

class PreparedKeyboardButtonFactory extends AbstractFactory
{
    /**
     * Creates a new PreparedKeyboardButton instance with default fake data.
     *
     * @param string|null $id Optional. Unique identifier of the keyboard button
     */
    public static function make(?string $id = null): PreparedKeyboardButtonInterface
    {
        return self::factory()->makePreparedKeyboardButton(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
        );
    }
}

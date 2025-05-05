<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\MenuButtonCommandsInterface;
use Phenogram\Bindings\Types\MenuButtonCommands;

class MenuButtonCommandsFactory extends AbstractFactory
{
    /**
     * Creates a new MenuButtonCommands instance with default fake data.
     *
     * @param string|null $type Optional. Type of the button, must be commands
     */
    public static function make(?string $type = null): MenuButtonCommandsInterface
    {
        return self::factory()->makeMenuButtonCommands(
            type: $type ?? self::fake()->word(),
        );
    }
}

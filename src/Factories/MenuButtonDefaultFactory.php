<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\MenuButtonDefaultInterface;
use Phenogram\Bindings\Types\MenuButtonDefault;

class MenuButtonDefaultFactory extends AbstractFactory
{
    /**
     * Creates a new MenuButtonDefault instance with default fake data.
     *
     * @param string|null $type Optional. Type of the button, must be default
     */
    public static function make(?string $type = null): MenuButtonDefaultInterface
    {
        return self::factory()->makeMenuButtonDefault(
            type: $type ?? self::fake()->word(),
        );
    }
}

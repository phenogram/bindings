<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\DisabledButton;
use Phenogram\Bindings\Types\Interfaces\DisabledButtonInterface;

class DisabledButtonFactory extends AbstractFactory
{
    /**
     * Creates a new DisabledButton instance with default fake data.
     */
    public static function make(): DisabledButtonInterface
    {
        return self::factory()->makeDisabledButton(
        );
    }
}

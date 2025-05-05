<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\CallbackGame;
use Phenogram\Bindings\Types\Interfaces\CallbackGameInterface;

class CallbackGameFactory extends AbstractFactory
{
    /**
     * Creates a new CallbackGame instance with default fake data.
     */
    public static function make(): CallbackGameInterface
    {
        return self::factory()->makeCallbackGame(
        );
    }
}

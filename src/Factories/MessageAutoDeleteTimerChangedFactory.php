<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\MessageAutoDeleteTimerChangedInterface;
use Phenogram\Bindings\Types\MessageAutoDeleteTimerChanged;

class MessageAutoDeleteTimerChangedFactory extends AbstractFactory
{
    /**
     * Creates a new MessageAutoDeleteTimerChanged instance with default fake data.
     *
     * @param int|null $messageAutoDeleteTime Optional. New auto-delete time for messages in the chat; in seconds
     */
    public static function make(?int $messageAutoDeleteTime = null): MessageAutoDeleteTimerChangedInterface
    {
        return self::factory()->makeMessageAutoDeleteTimerChanged(
            messageAutoDeleteTime: $messageAutoDeleteTime ?? self::fake()->randomNumber(),
        );
    }
}

<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\VideoChatEndedInterface;
use Phenogram\Bindings\Types\VideoChatEnded;

class VideoChatEndedFactory extends AbstractFactory
{
    /**
     * Creates a new VideoChatEnded instance with default fake data.
     *
     * @param int|null $duration Optional. Video chat duration in seconds
     */
    public static function make(?int $duration = null): VideoChatEndedInterface
    {
        return self::factory()->makeVideoChatEnded(
            duration: $duration ?? self::fake()->numberBetween(10, 1000),
        );
    }
}

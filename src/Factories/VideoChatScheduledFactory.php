<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\VideoChatScheduledInterface;
use Phenogram\Bindings\Types\VideoChatScheduled;

class VideoChatScheduledFactory extends AbstractFactory
{
    /**
     * Creates a new VideoChatScheduled instance with default fake data.
     *
     * @param int|null $startDate Optional. Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator
     */
    public static function make(?int $startDate = null): VideoChatScheduledInterface
    {
        return self::factory()->makeVideoChatScheduled(
            startDate: $startDate ?? self::fake()->unixTime(),
        );
    }
}

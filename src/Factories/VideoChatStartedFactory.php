<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\VideoChatStartedInterface;
use Phenogram\Bindings\Types\VideoChatStarted;

class VideoChatStartedFactory extends AbstractFactory
{
    /**
     * Creates a new VideoChatStarted instance with default fake data.
     */
    public static function make(): VideoChatStartedInterface
    {
        return self::factory()->makeVideoChatStarted(
        );
    }
}

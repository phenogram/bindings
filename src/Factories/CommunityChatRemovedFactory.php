<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\CommunityChatRemoved;
use Phenogram\Bindings\Types\Interfaces\CommunityChatRemovedInterface;

class CommunityChatRemovedFactory extends AbstractFactory
{
    /**
     * Creates a new CommunityChatRemoved instance with default fake data.
     */
    public static function make(): CommunityChatRemovedInterface
    {
        return self::factory()->makeCommunityChatRemoved(
        );
    }
}

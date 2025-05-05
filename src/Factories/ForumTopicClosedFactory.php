<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\ForumTopicClosed;
use Phenogram\Bindings\Types\Interfaces\ForumTopicClosedInterface;

class ForumTopicClosedFactory extends AbstractFactory
{
    /**
     * Creates a new ForumTopicClosed instance with default fake data.
     */
    public static function make(): ForumTopicClosedInterface
    {
        return self::factory()->makeForumTopicClosed(
        );
    }
}

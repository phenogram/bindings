<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\ForumTopicReopened;
use Phenogram\Bindings\Types\Interfaces\ForumTopicReopenedInterface;

class ForumTopicReopenedFactory extends AbstractFactory
{
    /**
     * Creates a new ForumTopicReopened instance with default fake data.
     */
    public static function make(): ForumTopicReopenedInterface
    {
        return self::factory()->makeForumTopicReopened(
        );
    }
}

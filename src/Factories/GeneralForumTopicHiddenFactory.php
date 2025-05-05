<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\GeneralForumTopicHidden;
use Phenogram\Bindings\Types\Interfaces\GeneralForumTopicHiddenInterface;

class GeneralForumTopicHiddenFactory extends AbstractFactory
{
    /**
     * Creates a new GeneralForumTopicHidden instance with default fake data.
     */
    public static function make(): GeneralForumTopicHiddenInterface
    {
        return self::factory()->makeGeneralForumTopicHidden(
        );
    }
}

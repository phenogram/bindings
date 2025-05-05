<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\GeneralForumTopicUnhidden;
use Phenogram\Bindings\Types\Interfaces\GeneralForumTopicUnhiddenInterface;

class GeneralForumTopicUnhiddenFactory extends AbstractFactory
{
    /**
     * Creates a new GeneralForumTopicUnhidden instance with default fake data.
     */
    public static function make(): GeneralForumTopicUnhiddenInterface
    {
        return self::factory()->makeGeneralForumTopicUnhidden(
        );
    }
}

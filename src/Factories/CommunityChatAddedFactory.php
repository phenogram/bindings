<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\CommunityFactory as Community;
use Phenogram\Bindings\Types\CommunityChatAdded;
use Phenogram\Bindings\Types\Interfaces\CommunityChatAddedInterface;
use Phenogram\Bindings\Types\Interfaces\CommunityInterface;

class CommunityChatAddedFactory extends AbstractFactory
{
    /**
     * Creates a new CommunityChatAdded instance with default fake data.
     *
     * @param CommunityInterface|null $community Optional. The new community to which the chat belongs
     */
    public static function make(?CommunityInterface $community = null): CommunityChatAddedInterface
    {
        return self::factory()->makeCommunityChatAdded(
            community: $community ?? Community::make(),
        );
    }
}

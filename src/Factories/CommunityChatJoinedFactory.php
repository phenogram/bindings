<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\CommunityFactory as Community;
use Phenogram\Bindings\Types\CommunityChatJoined;
use Phenogram\Bindings\Types\Interfaces\CommunityChatJoinedInterface;
use Phenogram\Bindings\Types\Interfaces\CommunityInterface;

class CommunityChatJoinedFactory extends AbstractFactory
{
    /**
     * Creates a new CommunityChatJoined instance with default fake data.
     *
     * @param CommunityInterface|null $community Optional. The community from which the chat was joined
     */
    public static function make(?CommunityInterface $community = null): CommunityChatJoinedInterface
    {
        return self::factory()->makeCommunityChatJoined(
            community: $community ?? Community::make(),
        );
    }
}

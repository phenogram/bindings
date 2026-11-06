<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about a chat being joined by a user from a community.
 */
interface CommunityChatJoinedInterface extends TypeInterface
{
    /** @var CommunityInterface $community The community from which the chat was joined */
    public CommunityInterface $community { set; get; }
}

<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\CommunityInterface;

/**
 * Describes a service message about a chat being joined by a user from a community.
 */
class CommunityChatJoined implements Interfaces\CommunityChatJoinedInterface
{
    /**
     * @param CommunityInterface $community The community from which the chat was joined
     */
    public function __construct(
        public CommunityInterface $community,
    ) {
    }
}

<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\CommunityInterface;

/**
 * Describes a service message about a chat being added to a community.
 */
class CommunityChatAdded implements Interfaces\CommunityChatAddedInterface
{
    /**
     * @param CommunityInterface $community The new community to which the chat belongs
     */
    public function __construct(
        public CommunityInterface $community,
    ) {
    }
}

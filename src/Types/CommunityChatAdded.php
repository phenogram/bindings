<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\CommunityInterface;

/**
 * Describes a service message about a chat or a bot being added to a community.
 */
class CommunityChatAdded implements Interfaces\CommunityChatAddedInterface
{
    /**
     * @param CommunityInterface $community The new community to which the chat or the bot belongs
     */
    public function __construct(
        public CommunityInterface $community,
    ) {
    }
}

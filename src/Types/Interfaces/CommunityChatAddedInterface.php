<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about a chat being added to a community.
 */
interface CommunityChatAddedInterface extends TypeInterface
{
    /** @var CommunityInterface $community The new community to which the chat belongs */
    public CommunityInterface $community { set; get; }
}

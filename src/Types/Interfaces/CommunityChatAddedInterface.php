<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about a chat or a bot being added to a community.
 */
interface CommunityChatAddedInterface extends TypeInterface
{
    /** @var CommunityInterface $community The new community to which the chat or the bot belongs */
    public CommunityInterface $community { set; get; }
}

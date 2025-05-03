<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a chat member that isn't currently a member of the chat, but may join it themselves.
 */
interface ChatMemberLeftInterface extends TypeInterface
{
    /** @var string $status The member's status in the chat, always “left” */
    public string $status { set; get; }

    /** @var UserInterface $user Information about the user */
    public UserInterface $user { set; get; }
}

<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a chat member that has no additional privileges or restrictions.
 */
interface ChatMemberMemberInterface extends TypeInterface
{
    /** @var string $status The member's status in the chat, always “member” */
    public string $status { set; get; }

    /** @var UserInterface $user Information about the user */
    public UserInterface $user { set; get; }

    /** @var int|null $untilDate Optional. Date when the user's subscription will expire; Unix time */
    public ?int $untilDate { set; get; }
}

<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 */
interface ChatMemberBannedInterface extends TypeInterface
{
    /** @var string $status The member's status in the chat, always “kicked” */
    public string $status { set; }

    /** @var UserInterface $user Information about the user */
    public UserInterface $user { set; }

    /** @var int $untilDate Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever */
    public int $untilDate { set; }
}

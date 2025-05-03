<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a join request sent to a chat.
 */
interface ChatJoinRequestInterface extends TypeInterface
{
    /** @var ChatInterface $chat Chat to which the request was sent */
    public ChatInterface $chat { set; get; }

    /** @var UserInterface $from User that sent the join request */
    public UserInterface $from { set; get; }

    /** @var int $userChatId Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user. */
    public int $userChatId { set; get; }

    /** @var int $date Date the request was sent in Unix time */
    public int $date { set; get; }

    /** @var string|null $bio Optional. Bio of the user. */
    public ?string $bio { set; get; }

    /** @var ChatInviteLinkInterface|null $inviteLink Optional. Chat invite link that was used by the user to send the join request */
    public ?ChatInviteLinkInterface $inviteLink { set; get; }
}

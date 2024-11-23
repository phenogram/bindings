<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInviteLinkInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Represents a join request sent to a chat.
 */
class ChatJoinRequest implements Interfaces\ChatJoinRequestInterface
{
    /**
     * @param ChatInterface                $chat       Chat to which the request was sent
     * @param UserInterface                $from       User that sent the join request
     * @param int                          $userChatId Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user.
     * @param int                          $date       Date the request was sent in Unix time
     * @param string|null                  $bio        Optional. Bio of the user.
     * @param ChatInviteLinkInterface|null $inviteLink Optional. Chat invite link that was used by the user to send the join request
     */
    public function __construct(
        public ChatInterface $chat,
        public UserInterface $from,
        public int $userChatId,
        public int $date,
        public ?string $bio = null,
        public ?ChatInviteLinkInterface $inviteLink = null,
    ) {
    }
}

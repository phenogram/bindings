<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChatJoinRequest;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInviteLinkInterface;
use Phenogram\Bindings\Types\Interfaces\ChatJoinRequestInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChatJoinRequestFactory extends AbstractFactory
{
    /**
     * Creates a new ChatJoinRequest instance with default fake data.
     *
     * @param ChatInterface|null           $chat       Optional. Chat to which the request was sent
     * @param UserInterface|null           $from       Optional. User that sent the join request
     * @param int|null                     $userChatId Optional. Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user.
     * @param int|null                     $date       Optional. Date the request was sent in Unix time
     * @param string|null                  $bio        Optional. Optional. Bio of the user.
     * @param ChatInviteLinkInterface|null $inviteLink Optional. Optional. Chat invite link that was used by the user to send the join request
     */
    public static function make(
        ?ChatInterface $chat = null,
        ?UserInterface $from = null,
        ?int $userChatId = null,
        ?int $date = null,
        ?string $bio = null,
        ?ChatInviteLinkInterface $inviteLink = null,
    ): ChatJoinRequestInterface {
        return self::factory()->makeChatJoinRequest(
            chat: $chat ?? Chat::make(),
            from: $from ?? User::make(),
            userChatId: $userChatId ?? self::fake()->numberBetween(100000, 999999999),
            date: $date ?? self::fake()->unixTime(),
            bio: $bio,
            inviteLink: $inviteLink,
        );
    }
}

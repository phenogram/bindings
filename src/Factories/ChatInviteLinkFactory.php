<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChatInviteLink;
use Phenogram\Bindings\Types\Interfaces\ChatInviteLinkInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChatInviteLinkFactory extends AbstractFactory
{
    /**
     * Creates a new ChatInviteLink instance with default fake data.
     *
     * @param string|null        $inviteLink              Optional. The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
     * @param UserInterface|null $creator                 Optional. Creator of the link
     * @param bool|null          $createsJoinRequest      Optional. True, if users joining the chat via the link need to be approved by chat administrators
     * @param bool|null          $isPrimary               Optional. True, if the link is primary
     * @param bool|null          $isRevoked               Optional. True, if the link is revoked
     * @param string|null        $name                    Optional. Optional. Invite link name
     * @param int|null           $expireDate              Optional. Optional. Point in time (Unix timestamp) when the link will expire or has been expired
     * @param int|null           $memberLimit             Optional. Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     * @param int|null           $pendingJoinRequestCount Optional. Optional. Number of pending join requests created using this link
     * @param int|null           $subscriptionPeriod      Optional. Optional. The number of seconds the subscription will be active for before the next payment
     * @param int|null           $subscriptionPrice       Optional. Optional. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat using the link
     */
    public static function make(
        ?string $inviteLink = null,
        ?UserInterface $creator = null,
        ?bool $createsJoinRequest = null,
        ?bool $isPrimary = null,
        ?bool $isRevoked = null,
        ?string $name = null,
        ?int $expireDate = null,
        ?int $memberLimit = null,
        ?int $pendingJoinRequestCount = null,
        ?int $subscriptionPeriod = null,
        ?int $subscriptionPrice = null,
    ): ChatInviteLinkInterface {
        return self::factory()->makeChatInviteLink(
            inviteLink: $inviteLink ?? self::fake()->text(50),
            creator: $creator ?? User::make(),
            createsJoinRequest: $createsJoinRequest ?? self::fake()->boolean(),
            isPrimary: $isPrimary ?? self::fake()->boolean(),
            isRevoked: $isRevoked ?? self::fake()->boolean(),
            name: $name,
            expireDate: $expireDate,
            memberLimit: $memberLimit,
            pendingJoinRequestCount: $pendingJoinRequestCount,
            subscriptionPeriod: $subscriptionPeriod,
            subscriptionPrice: $subscriptionPrice,
        );
    }
}

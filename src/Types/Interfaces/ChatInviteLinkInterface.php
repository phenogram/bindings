<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents an invite link for a chat.
 */
interface ChatInviteLinkInterface extends TypeInterface
{
    /** @var string $inviteLink The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”. */
    public string $inviteLink { set; get; }

    /** @var UserInterface $creator Creator of the link */
    public UserInterface $creator { set; get; }

    /** @var bool $createsJoinRequest True, if users joining the chat via the link need to be approved by chat administrators */
    public bool $createsJoinRequest { set; get; }

    /** @var bool $isPrimary True, if the link is primary */
    public bool $isPrimary { set; get; }

    /** @var bool $isRevoked True, if the link is revoked */
    public bool $isRevoked { set; get; }

    /** @var string|null $name Optional. Invite link name */
    public ?string $name { set; get; }

    /** @var int|null $expireDate Optional. Point in time (Unix timestamp) when the link will expire or has been expired */
    public ?int $expireDate { set; get; }

    /** @var int|null $memberLimit Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999 */
    public ?int $memberLimit { set; get; }

    /** @var int|null $pendingJoinRequestCount Optional. Number of pending join requests created using this link */
    public ?int $pendingJoinRequestCount { set; get; }

    /** @var int|null $subscriptionPeriod Optional. The number of seconds the subscription will be active for before the next payment */
    public ?int $subscriptionPeriod { set; get; }

    /** @var int|null $subscriptionPrice Optional. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat using the link */
    public ?int $subscriptionPrice { set; get; }
}

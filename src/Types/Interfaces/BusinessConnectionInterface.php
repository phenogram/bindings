<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes the connection of the bot with a business account.
 */
interface BusinessConnectionInterface extends TypeInterface
{
    /** @var string $id Unique identifier of the business connection */
    public string $id { set; get; }

    /** @var UserInterface $user Business account user that created the business connection */
    public UserInterface $user { set; get; }

    /** @var int $userChatId Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. */
    public int $userChatId { set; get; }

    /** @var int $date Date the connection was established in Unix time */
    public int $date { set; get; }

    /** @var BusinessBotRightsInterface|null $rights Optional. Rights of the business bot */
    public ?BusinessBotRightsInterface $rights { set; get; }

    /** @var bool $isEnabled True, if the connection is active */
    public bool $isEnabled { set; get; }
}

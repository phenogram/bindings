<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a Telegram user or bot.
 */
interface UserInterface extends TypeInterface
{
    /** @var int $id Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. */
    public int $id { set; }

    /** @var bool $isBot True, if this user is a bot */
    public bool $isBot { set; }

    /** @var string $firstName User's or bot's first name */
    public string $firstName { set; }

    /** @var string|null $lastName Optional. User's or bot's last name */
    public ?string $lastName { set; }

    /** @var string|null $username Optional. User's or bot's username */
    public ?string $username { set; }

    /** @var string|null $languageCode Optional. IETF language tag of the user's language */
    public ?string $languageCode { set; }

    /** @var bool|null $isPremium Optional. True, if this user is a Telegram Premium user */
    public ?bool $isPremium { set; }

    /** @var bool|null $addedToAttachmentMenu Optional. True, if this user added the bot to the attachment menu */
    public ?bool $addedToAttachmentMenu { set; }

    /** @var bool|null $canJoinGroups Optional. True, if the bot can be invited to groups. Returned only in getMe. */
    public ?bool $canJoinGroups { set; }

    /** @var bool|null $canReadAllGroupMessages Optional. True, if privacy mode is disabled for the bot. Returned only in getMe. */
    public ?bool $canReadAllGroupMessages { set; }

    /** @var bool|null $supportsInlineQueries Optional. True, if the bot supports inline queries. Returned only in getMe. */
    public ?bool $supportsInlineQueries { set; }

    /** @var bool|null $canConnectToBusiness Optional. True, if the bot can be connected to a Telegram Business account to receive its messages. Returned only in getMe. */
    public ?bool $canConnectToBusiness { set; }

    /** @var bool|null $hasMainWebApp Optional. True, if the bot has a main Web App. Returned only in getMe. */
    public ?bool $hasMainWebApp { set; }
}

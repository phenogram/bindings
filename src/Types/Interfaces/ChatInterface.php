<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a chat.
 */
interface ChatInterface extends TypeInterface
{
    /** @var int $id Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public int $id { set; get; }

    /** @var string $type Type of the chat, can be either “private”, “group”, “supergroup” or “channel” */
    public string $type { set; get; }

    /** @var string|null $title Optional. Title, for supergroups, channels and group chats */
    public ?string $title { set; get; }

    /** @var string|null $username Optional. Username, for private chats, supergroups and channels if available */
    public ?string $username { set; get; }

    /** @var string|null $firstName Optional. First name of the other party in a private chat */
    public ?string $firstName { set; get; }

    /** @var string|null $lastName Optional. Last name of the other party in a private chat */
    public ?string $lastName { set; get; }

    /** @var bool|null $isForum Optional. True, if the supergroup chat is a forum (has topics enabled) */
    public ?bool $isForum { set; get; }

    /** @var bool|null $isDirectMessages Optional. True, if the chat is the direct messages chat of a channel */
    public ?bool $isDirectMessages { set; get; }
}

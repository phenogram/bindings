<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about a user that was shared with the bot using a KeyboardButtonRequestUsers button.
 */
interface SharedUserInterface extends TypeInterface
{
    /** @var int $userId Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means. */
    public int $userId { set; get; }

    /** @var string|null $firstName Optional. First name of the user, if the name was requested by the bot */
    public ?string $firstName { set; get; }

    /** @var string|null $lastName Optional. Last name of the user, if the name was requested by the bot */
    public ?string $lastName { set; get; }

    /** @var string|null $username Optional. Username of the user, if the username was requested by the bot */
    public ?string $username { set; get; }

    /** @var array<PhotoSizeInterface>|null $photo Optional. Available sizes of the chat photo, if the photo was requested by the bot */
    public ?array $photo { set; get; }
}

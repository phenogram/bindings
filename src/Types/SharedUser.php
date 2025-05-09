<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;

/**
 * This object contains information about a user that was shared with the bot using a KeyboardButtonRequestUsers button.
 */
class SharedUser implements Interfaces\SharedUserInterface
{
    /**
     * @param int                            $userId    Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.
     * @param string|null                    $firstName Optional. First name of the user, if the name was requested by the bot
     * @param string|null                    $lastName  Optional. Last name of the user, if the name was requested by the bot
     * @param string|null                    $username  Optional. Username of the user, if the username was requested by the bot
     * @param array<PhotoSizeInterface>|null $photo     Optional. Available sizes of the chat photo, if the photo was requested by the bot
     */
    public function __construct(
        public int $userId,
        public ?string $firstName = null,
        public ?string $lastName = null,
        public ?string $username = null,
        public ?array $photo = null,
    ) {
    }
}

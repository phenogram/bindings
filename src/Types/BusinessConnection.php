<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\BusinessBotRightsInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Describes the connection of the bot with a business account.
 */
class BusinessConnection implements Interfaces\BusinessConnectionInterface
{
    /**
     * @param string                          $id         Unique identifier of the business connection
     * @param UserInterface                   $user       Business account user that created the business connection
     * @param int                             $userChatId Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param int                             $date       Date the connection was established in Unix time
     * @param bool                            $isEnabled  True, if the connection is active
     * @param BusinessBotRightsInterface|null $rights     Optional. Rights of the business bot
     */
    public function __construct(
        public string $id,
        public UserInterface $user,
        public int $userChatId,
        public int $date,
        public bool $isEnabled,
        public ?BusinessBotRightsInterface $rights = null,
    ) {
    }
}

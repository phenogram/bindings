<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * The message was originally sent by a known user.
 */
class MessageOriginUser extends MessageOrigin implements Interfaces\MessageOriginUserInterface
{
    /**
     * @param string        $type       Type of the message origin, always “user”
     * @param int           $date       Date the message was sent originally in Unix time
     * @param UserInterface $senderUser User that sent the message originally
     */
    public function __construct(
        public string $type,
        public int $date,
        public UserInterface $senderUser,
    ) {
    }
}

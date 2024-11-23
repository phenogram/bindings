<?php

namespace Phenogram\Bindings\Types;

/**
 * The message was originally sent by an unknown user.
 */
class MessageOriginHiddenUser extends MessageOrigin implements Interfaces\MessageOriginHiddenUserInterface
{
    /**
     * @param string $type           Type of the message origin, always “hidden_user”
     * @param int    $date           Date the message was sent originally in Unix time
     * @param string $senderUserName Name of the user that sent the message originally
     */
    public function __construct(
        public string $type,
        public int $date,
        public string $senderUserName,
    ) {
    }
}

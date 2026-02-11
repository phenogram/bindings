<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Describes a service message about an ownership change in the chat.
 */
class ChatOwnerChanged implements Interfaces\ChatOwnerChangedInterface
{
    /**
     * @param UserInterface $newOwner The new owner of the chat
     */
    public function __construct(
        public UserInterface $newOwner,
    ) {
    }
}

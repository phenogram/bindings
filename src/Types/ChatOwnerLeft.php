<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Describes a service message about the chat owner leaving the chat.
 */
class ChatOwnerLeft implements Interfaces\ChatOwnerLeftInterface
{
    /**
     * @param UserInterface|null $newOwner Optional. The user which will be the new owner of the chat if the previous owner does not return to the chat
     */
    public function __construct(
        public ?UserInterface $newOwner = null,
    ) {
    }
}

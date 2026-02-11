<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about an ownership change in the chat.
 */
interface ChatOwnerChangedInterface extends TypeInterface
{
    /** @var UserInterface $newOwner The new owner of the chat */
    public UserInterface $newOwner { set; get; }
}

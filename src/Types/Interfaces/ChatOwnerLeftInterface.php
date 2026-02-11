<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about the chat owner leaving the chat.
 */
interface ChatOwnerLeftInterface extends TypeInterface
{
    /** @var UserInterface|null $newOwner Optional. The user which will be the new owner of the chat if the previous owner does not return to the chat */
    public ?UserInterface $newOwner { set; get; }
}

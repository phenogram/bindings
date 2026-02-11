<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChatOwnerLeft;
use Phenogram\Bindings\Types\Interfaces\ChatOwnerLeftInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChatOwnerLeftFactory extends AbstractFactory
{
    /**
     * Creates a new ChatOwnerLeft instance with default fake data.
     *
     * @param UserInterface|null $newOwner Optional. Optional. The user which will be the new owner of the chat if the previous owner does not return to the chat
     */
    public static function make(?UserInterface $newOwner = null): ChatOwnerLeftInterface
    {
        return self::factory()->makeChatOwnerLeft(
            newOwner: $newOwner,
        );
    }
}

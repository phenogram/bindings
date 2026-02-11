<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChatOwnerChanged;
use Phenogram\Bindings\Types\Interfaces\ChatOwnerChangedInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChatOwnerChangedFactory extends AbstractFactory
{
    /**
     * Creates a new ChatOwnerChanged instance with default fake data.
     *
     * @param UserInterface|null $newOwner Optional. The new owner of the chat
     */
    public static function make(?UserInterface $newOwner = null): ChatOwnerChangedInterface
    {
        return self::factory()->makeChatOwnerChanged(
            newOwner: $newOwner ?? User::make(),
        );
    }
}

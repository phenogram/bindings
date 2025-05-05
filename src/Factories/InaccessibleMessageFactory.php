<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Types\InaccessibleMessage;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\InaccessibleMessageInterface;

class InaccessibleMessageFactory extends AbstractFactory
{
    /**
     * Creates a new InaccessibleMessage instance with default fake data.
     *
     * @param ChatInterface|null $chat      Optional. Chat the message belonged to
     * @param int|null           $messageId Optional. Unique message identifier inside the chat
     * @param int|null           $date      Optional. Always 0. The field can be used to differentiate regular and inaccessible messages.
     */
    public static function make(
        ?ChatInterface $chat = null,
        ?int $messageId = null,
        ?int $date = null,
    ): InaccessibleMessageInterface {
        return self::factory()->makeInaccessibleMessage(
            chat: $chat ?? Chat::make(),
            messageId: $messageId ?? self::fake()->numberBetween(100000, 999999999),
            date: $date ?? self::fake()->unixTime(),
        );
    }
}

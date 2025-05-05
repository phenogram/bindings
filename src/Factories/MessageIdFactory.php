<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\MessageIdInterface;
use Phenogram\Bindings\Types\MessageId;

class MessageIdFactory extends AbstractFactory
{
    /**
     * Creates a new MessageId instance with default fake data.
     *
     * @param int|null $messageId Optional. Unique message identifier. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent
     */
    public static function make(?int $messageId = null): MessageIdInterface
    {
        return self::factory()->makeMessageId(
            messageId: $messageId ?? self::fake()->numberBetween(100000, 999999999),
        );
    }
}

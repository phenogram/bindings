<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\MessageOriginChannelInterface;
use Phenogram\Bindings\Types\MessageOriginChannel;

class MessageOriginChannelFactory extends AbstractFactory
{
    /**
     * Creates a new MessageOriginChannel instance with default fake data.
     *
     * @param string|null        $type            Optional. Type of the message origin, always “channel”
     * @param int|null           $date            Optional. Date the message was sent originally in Unix time
     * @param ChatInterface|null $chat            Optional. Channel chat to which the message was originally sent
     * @param int|null           $messageId       Optional. Unique message identifier inside the chat
     * @param string|null        $authorSignature Optional. Optional. Signature of the original post author
     */
    public static function make(
        ?string $type = null,
        ?int $date = null,
        ?ChatInterface $chat = null,
        ?int $messageId = null,
        ?string $authorSignature = null,
    ): MessageOriginChannelInterface {
        return self::factory()->makeMessageOriginChannel(
            type: $type ?? self::fake()->word(),
            date: $date ?? self::fake()->unixTime(),
            chat: $chat ?? Chat::make(),
            messageId: $messageId ?? self::fake()->numberBetween(100000, 999999999),
            authorSignature: $authorSignature,
        );
    }
}

<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\MessageOriginChatInterface;
use Phenogram\Bindings\Types\MessageOriginChat;

class MessageOriginChatFactory extends AbstractFactory
{
    /**
     * Creates a new MessageOriginChat instance with default fake data.
     *
     * @param string|null        $type            Optional. Type of the message origin, always “chat”
     * @param int|null           $date            Optional. Date the message was sent originally in Unix time
     * @param ChatInterface|null $senderChat      Optional. Chat that sent the message originally
     * @param string|null        $authorSignature Optional. Optional. For messages originally sent by an anonymous chat administrator, original message author signature
     */
    public static function make(
        ?string $type = null,
        ?int $date = null,
        ?ChatInterface $senderChat = null,
        ?string $authorSignature = null,
    ): MessageOriginChatInterface {
        return self::factory()->makeMessageOriginChat(
            type: $type ?? self::fake()->word(),
            date: $date ?? self::fake()->unixTime(),
            senderChat: $senderChat ?? Chat::make(),
            authorSignature: $authorSignature,
        );
    }
}

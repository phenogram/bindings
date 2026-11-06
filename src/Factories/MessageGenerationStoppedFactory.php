<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\MessageGenerationStoppedInterface;
use Phenogram\Bindings\Types\MessageGenerationStopped;

class MessageGenerationStoppedFactory extends AbstractFactory
{
    /**
     * Creates a new MessageGenerationStopped instance with default fake data.
     *
     * @param ChatInterface|null $chat            Optional. Chat in which the message is generated
     * @param int|null           $messageThreadId Optional. Optional. Unique identifier of the message thread in which the message is generated
     * @param int|null           $draftId         Optional. Unique identifier of the message draft which was stopped
     */
    public static function make(
        ?ChatInterface $chat = null,
        ?int $messageThreadId = null,
        ?int $draftId = null,
    ): MessageGenerationStoppedInterface {
        return self::factory()->makeMessageGenerationStopped(
            chat: $chat ?? Chat::make(),
            messageThreadId: $messageThreadId,
            draftId: $draftId ?? self::fake()->numberBetween(100000, 999999999),
        );
    }
}

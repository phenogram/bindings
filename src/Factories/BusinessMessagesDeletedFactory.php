<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Types\BusinessMessagesDeleted;
use Phenogram\Bindings\Types\Interfaces\BusinessMessagesDeletedInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;

class BusinessMessagesDeletedFactory extends AbstractFactory
{
    /**
     * Creates a new BusinessMessagesDeleted instance with default fake data.
     *
     * @param string|null        $businessConnectionId Optional. Unique identifier of the business connection
     * @param ChatInterface|null $chat                 Optional. Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
     * @param array|null         $messageIds           Optional. The list of identifiers of deleted messages in the chat of the business account
     */
    public static function make(
        ?string $businessConnectionId = null,
        ?ChatInterface $chat = null,
        ?array $messageIds = null,
    ): BusinessMessagesDeletedInterface {
        return self::factory()->makeBusinessMessagesDeleted(
            businessConnectionId: $businessConnectionId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            chat: $chat ?? Chat::make(),
            messageIds: $messageIds ?? self::fake()->randomElements(range(1, 100), self::fake()->numberBetween(1, 5)),
        );
    }
}

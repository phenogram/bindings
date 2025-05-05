<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\LocationFactory as Location;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\InlineQuery;
use Phenogram\Bindings\Types\Interfaces\InlineQueryInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class InlineQueryFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQuery instance with default fake data.
     *
     * @param string|null            $id       Optional. Unique identifier for this query
     * @param UserInterface|null     $from     Optional. Sender
     * @param string|null            $query    Optional. Text of the query (up to 256 characters)
     * @param string|null            $offset   Optional. Offset of the results to be returned, can be controlled by the bot
     * @param string|null            $chatType Optional. Optional. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat
     * @param LocationInterface|null $location Optional. Optional. Sender location, only for bots that request user location
     */
    public static function make(
        ?string $id = null,
        ?UserInterface $from = null,
        ?string $query = null,
        ?string $offset = null,
        ?string $chatType = null,
        ?LocationInterface $location = null,
    ): InlineQueryInterface {
        return self::factory()->makeInlineQuery(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            from: $from ?? User::make(),
            query: $query ?? self::fake()->sentence(),
            offset: $offset ?? self::fake()->text(50),
            chatType: $chatType,
            location: $location,
        );
    }
}

<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
 */
class InlineQuery implements TypeInterface
{
    /**
     * @param string        $id       Unique identifier for this query
     * @param User          $from     Sender
     * @param string        $query    Text of the query (up to 256 characters)
     * @param string        $offset   Offset of the results to be returned, can be controlled by the bot
     * @param string|null   $chatType Optional. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat
     * @param Location|null $location Optional. Sender location, only for bots that request user location
     */
    public function __construct(
        public string $id,
        public User $from,
        public string $query,
        public string $offset,
        public ?string $chatType = null,
        public ?Location $location = null,
    ) {
    }
}

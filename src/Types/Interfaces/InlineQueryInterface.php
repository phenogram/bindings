<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
 */
interface InlineQueryInterface extends TypeInterface
{
    /** @var string $id Unique identifier for this query */
    public string $id { set; }

    /** @var UserInterface $from Sender */
    public UserInterface $from { set; }

    /** @var string $query Text of the query (up to 256 characters) */
    public string $query { set; }

    /** @var string $offset Offset of the results to be returned, can be controlled by the bot */
    public string $offset { set; }

    /** @var string|null $chatType Optional. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat */
    public ?string $chatType { set; }

    /** @var LocationInterface|null $location Optional. Sender location, only for bots that request user location */
    public ?LocationInterface $location { set; }
}

<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents an incoming callback query from a callback button in an inline keyboard. If the button that originated the query was attached to a message sent by the bot, the field message will be present. If the button was attached to a message sent via the bot (in inline mode), the field inline_message_id will be present. Exactly one of the fields data or game_short_name will be present.
 */
interface CallbackQueryInterface extends TypeInterface
{
    /** @var string $id Unique identifier for this query */
    public string $id { set; get; }

    /** @var UserInterface $from Sender */
    public UserInterface $from { set; get; }

    /** @var MaybeInaccessibleMessageInterface|null $message Optional. Message sent by the bot with the callback button that originated the query */
    public ?MaybeInaccessibleMessageInterface $message { set; get; }

    /** @var string|null $inlineMessageId Optional. Identifier of the message sent via the bot in inline mode, that originated the query. */
    public ?string $inlineMessageId { set; get; }

    /** @var string $chatInstance Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games. */
    public string $chatInstance { set; get; }

    /** @var string|null $data Optional. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data. */
    public ?string $data { set; get; }

    /** @var string|null $gameShortName Optional. Short name of a Game to be returned, serves as the unique identifier for the game */
    public ?string $gameShortName { set; get; }
}

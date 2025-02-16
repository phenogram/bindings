<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes reply parameters for the message that is being sent.
 */
interface ReplyParametersInterface extends TypeInterface
{
    /** @var int $messageId Identifier of the message that will be replied to in the current chat, or in the chat chat_id if it is specified */
    public int $messageId { set; }

    /** @var int|string|null $chatId Optional. If the message to be replied to is from a different chat, unique identifier for the chat or username of the channel (in the format @channelusername). Not supported for messages sent on behalf of a business account. */
    public int|string|null $chatId { set; }

    /** @var bool|null $allowSendingWithoutReply Optional. Pass True if the message should be sent even if the specified message to be replied to is not found. Always False for replies in another chat or forum topic. Always True for messages sent on behalf of a business account. */
    public ?bool $allowSendingWithoutReply { set; }

    /** @var string|null $quote Optional. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. The quote must be an exact substring of the message to be replied to, including bold, italic, underline, strikethrough, spoiler, and custom_emoji entities. The message will fail to send if the quote isn't found in the original message. */
    public ?string $quote { set; }

    /** @var string|null $quoteParseMode Optional. Mode for parsing entities in the quote. See formatting options for more details. */
    public ?string $quoteParseMode { set; }

    /** @var array<MessageEntityInterface>|null $quoteEntities Optional. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of quote_parse_mode. */
    public ?array $quoteEntities { set; }

    /** @var int|null $quotePosition Optional. Position of the quote in the original message in UTF-16 code units */
    public ?int $quotePosition { set; }
}

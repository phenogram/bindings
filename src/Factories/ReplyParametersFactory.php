<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\ReplyParametersInterface;
use Phenogram\Bindings\Types\ReplyParameters;

class ReplyParametersFactory extends AbstractFactory
{
    /**
     * Creates a new ReplyParameters instance with default fake data.
     *
     * @param int|null        $messageId                Optional. Identifier of the message that will be replied to in the current chat, or in the chat chat_id if it is specified
     * @param int|string|null $chatId                   Optional. Optional. If the message to be replied to is from a different chat, unique identifier for the chat or username of the channel (in the format @channelusername). Not supported for messages sent on behalf of a business account.
     * @param bool|null       $allowSendingWithoutReply Optional. Optional. Pass True if the message should be sent even if the specified message to be replied to is not found. Always False for replies in another chat or forum topic. Always True for messages sent on behalf of a business account.
     * @param string|null     $quote                    Optional. Optional. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. The quote must be an exact substring of the message to be replied to, including bold, italic, underline, strikethrough, spoiler, and custom_emoji entities. The message will fail to send if the quote isn't found in the original message.
     * @param string|null     $quoteParseMode           Optional. Optional. Mode for parsing entities in the quote. See formatting options for more details.
     * @param array|null      $quoteEntities            Optional. Optional. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of quote_parse_mode.
     * @param int|null        $quotePosition            Optional. Optional. Position of the quote in the original message in UTF-16 code units
     */
    public static function make(
        ?int $messageId = null,
        int|string|null $chatId = null,
        ?bool $allowSendingWithoutReply = null,
        ?string $quote = null,
        ?string $quoteParseMode = null,
        ?array $quoteEntities = null,
        ?int $quotePosition = null,
    ): ReplyParametersInterface {
        return self::factory()->makeReplyParameters(
            messageId: $messageId ?? self::fake()->numberBetween(100000, 999999999),
            chatId: $chatId,
            allowSendingWithoutReply: $allowSendingWithoutReply,
            quote: $quote,
            quoteParseMode: $quoteParseMode,
            quoteEntities: $quoteEntities,
            quotePosition: $quotePosition,
        );
    }
}

<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\ReplyParametersInterface;
use Phenogram\Bindings\Types\ReplyParameters;

class ReplyParametersFactory extends AbstractFactory
{
    /**
     * Creates a new ReplyParameters instance with default fake data.
     *
     * @param int|null        $messageId                Optional. Optional. Identifier of the message that will be replied to in the current chat, or in the chat chat_id if it is specified. Required if ephemeral_message_id isn't specified.
     * @param int|string|null $chatId                   Optional. Optional. If the message to be replied to is from a different chat, unique identifier for the chat or username of the bot, supergroup or channel in the format @username. Not supported for messages sent on behalf of a business account, messages from channel direct messages chats and ephemeral messages.
     * @param int|null        $ephemeralMessageId       Optional. Optional. Identifier of the incoming ephemeral message that will be replied to in the current chat. A reply to an ephemeral message must itself be an ephemeral message. An ephemeral message may only be replied to within 15 seconds of being sent. Required if message_id isn't specified.
     * @param bool|null       $allowSendingWithoutReply Optional. Optional. Pass True if the message should be sent even if the specified message to be replied to is not found. Always False for replies in another chat or forum topic, and sent ephemeral messages. Always True for messages sent on behalf of a business account.
     * @param string|null     $quote                    Optional. Optional. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. The quote must be an exact substring of the message to be replied to, including bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities. The message will fail to send if the quote isn't found in the original message. Ignored for ephemeral messages.
     * @param string|null     $quoteParseMode           Optional. Optional. Mode for parsing entities in the quote. See formatting options for more details.
     * @param array|null      $quoteEntities            Optional. Optional. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of quote_parse_mode.
     * @param int|null        $quotePosition            Optional. Optional. Position of the quote in the original message in UTF-16 code units
     * @param int|null        $checklistTaskId          Optional. Optional. Identifier of the specific checklist task to be replied to
     * @param string|null     $pollOptionId             Optional. Optional. Persistent identifier of the specific poll option to be replied to
     */
    public static function make(
        ?int $messageId = null,
        int|string|null $chatId = null,
        ?int $ephemeralMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        ?string $quote = null,
        ?string $quoteParseMode = null,
        ?array $quoteEntities = null,
        ?int $quotePosition = null,
        ?int $checklistTaskId = null,
        ?string $pollOptionId = null,
    ): ReplyParametersInterface {
        return self::factory()->makeReplyParameters(
            messageId: $messageId,
            chatId: $chatId,
            ephemeralMessageId: $ephemeralMessageId,
            allowSendingWithoutReply: $allowSendingWithoutReply,
            quote: $quote,
            quoteParseMode: $quoteParseMode,
            quoteEntities: $quoteEntities,
            quotePosition: $quotePosition,
            checklistTaskId: $checklistTaskId,
            pollOptionId: $pollOptionId,
        );
    }
}

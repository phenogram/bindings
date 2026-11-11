<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\ReplyParametersInterface;
use Phenogram\Bindings\Types\ReplyParameters;

class ReplyParametersFactory extends AbstractFactory
{
    /**
     * Creates a new ReplyParameters instance with default fake data.
     *
     * @param int|null                                                                               $messageId                Optional. Optional. Identifier of the message that will be replied to in the current chat, or in the chat chat_id if it is specified. Required if ephemeral_message_id isn't specified.
     * @param int|string|null                                                                        $chatId                   Optional. Optional. If the message to be replied to is from a different chat, unique identifier for the chat or username of the bot, supergroup, or channel in the format @username. Not supported for messages sent on behalf of a business account, messages from channel direct messages chats and ephemeral messages.
     * @param int|null                                                                               $ephemeralMessageId       Optional. Optional. Identifier of the incoming ephemeral message that will be replied to in the current chat. A reply to an ephemeral message must itself be an ephemeral message. An ephemeral message may only be replied to within 15 seconds of being sent. Required if message_id isn't specified.
     * @param bool|null                                                                              $allowSendingWithoutReply Optional. Optional. Pass True if the message should be sent even if the specified message to be replied to is not found. Always False for replies in another chat or forum topic, and sent ephemeral messages. Always True for messages sent on behalf of a business account.
     * @param string|null                                                                            $quote                    Optional. Optional. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. The quote must be an exact substring of the message to be replied to, including bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities. The message will fail to send if the quote isn't found in the original message. Ignored for ephemeral messages.
     * @param string|null                                                                            $quoteParseMode           Optional. Optional. Mode for parsing entities in the quote. See formatting options for more details.
     * @param array|null                                                                             $quoteEntities            Optional. Optional. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of quote_parse_mode.
     * @param array<\Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array<mixed>>|null $quoteRichTexts           Optional. Optional. A JSON-serialized list of quoted parts of the rich message to be replied to. Must contain one element for each quoted text of the message in the order of their appearance. Each of the following is a separate quoted text: the text of a paragraph, a heading, a preformatted block, a footer, or a mathematical expression; the text and the credit of a block quotation or a pull quotation; the summary of a details block; the caption and each cell of a table; the text and the credit of a caption of a media block, a collage, a slideshow, or a map. Texts of blocks nested in lists, block quotations, details, collages, and slideshows are separate quoted texts too. The first and the last elements can contain only a part of the corresponding text; all other elements must contain the whole text. Formatting of the quoted parts must be kept, and rich texts must be nested in the same way as in the message received from the server. Mathematical expressions must be quoted entirely. Buttons in RichBlockButtons, anchors and dividers can't be quoted. Up to 32 quoted texts with total length up to 1024 characters can be specified. Only plain text, RichTextBold, RichTextItalic, RichTextUnderline, RichTextStrikethrough, RichTextSpoiler, RichTextSubscript, RichTextSuperscript, RichTextDateTime, RichTextCustomEmoji, RichTextMathematicalExpression, and arrays of them are kept in the quote; other rich text types are replaced with their text. If non-empty, then quote, quote_parse_mode and quote_entities are ignored.
     * @param int|null                                                                               $quotePosition            Optional. Optional. Position of the quote in the original message in UTF-16 code units. For quotes from rich messages, it is the position in the text formed by joining plain texts of all quotable texts of the message, separated by line feeds.
     * @param int|null                                                                               $checklistTaskId          Optional. Optional. Identifier of the specific checklist task to be replied to
     * @param string|null                                                                            $pollOptionId             Optional. Optional. Persistent identifier of the specific poll option to be replied to
     */
    public static function make(
        ?int $messageId = null,
        int|string|null $chatId = null,
        ?int $ephemeralMessageId = null,
        ?bool $allowSendingWithoutReply = null,
        ?string $quote = null,
        ?string $quoteParseMode = null,
        ?array $quoteEntities = null,
        ?array $quoteRichTexts = null,
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
            quoteRichTexts: $quoteRichTexts,
            quotePosition: $quotePosition,
            checklistTaskId: $checklistTaskId,
            pollOptionId: $pollOptionId,
        );
    }
}

<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Represents a link to a voice message stored on the Telegram servers. By default, this voice message will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the voice message.
 */
class InlineQueryResultCachedVoice extends InlineQueryResult implements Interfaces\InlineQueryResultCachedVoiceInterface
{
    /**
     * @param string                             $id                  Unique identifier for this result, 1-64 bytes
     * @param string                             $voiceFileId         A valid file identifier for the voice message
     * @param string                             $title               Voice message title
     * @param string                             $type                Type of the result, must be voice
     * @param string|null                        $caption             Optional. Caption, 0-1024 characters after entities parsing
     * @param string|null                        $parseMode           Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
     * @param array<MessageEntityInterface>|null $captionEntities     Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param InlineKeyboardMarkupInterface|null $replyMarkup         Optional. Inline keyboard attached to the message
     * @param InputMessageContentInterface|null  $inputMessageContent Optional. Content of the message to be sent instead of the voice message
     */
    public function __construct(
        public string $id,
        public string $voiceFileId,
        public string $title,
        public string $type = 'voice',
        public ?string $caption = null,
        public ?string $parseMode = null,
        public ?array $captionEntities = null,
        public ?InlineKeyboardMarkupInterface $replyMarkup = null,
        public ?InputMessageContentInterface $inputMessageContent = null,
    ) {
    }
}

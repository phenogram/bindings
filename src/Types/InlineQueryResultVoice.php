<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Represents a link to a voice recording in an .OGG container encoded with OPUS. By default, this voice recording will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the the voice message.
 */
class InlineQueryResultVoice extends InlineQueryResult implements Interfaces\InlineQueryResultVoiceInterface
{
    /**
     * @param string                             $id                  Unique identifier for this result, 1-64 bytes
     * @param string                             $voiceUrl            A valid URL for the voice recording
     * @param string                             $title               Recording title
     * @param string                             $type                Type of the result, must be voice
     * @param string|null                        $caption             Optional. Caption, 0-1024 characters after entities parsing
     * @param string|null                        $parseMode           Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
     * @param array<MessageEntityInterface>|null $captionEntities     Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param int|null                           $voiceDuration       Optional. Recording duration in seconds
     * @param InlineKeyboardMarkupInterface|null $replyMarkup         Optional. Inline keyboard attached to the message
     * @param InputMessageContentInterface|null  $inputMessageContent Optional. Content of the message to be sent instead of the voice recording
     */
    public function __construct(
        public string $id,
        public string $voiceUrl,
        public string $title,
        public string $type = 'voice',
        public ?string $caption = null,
        public ?string $parseMode = null,
        public ?array $captionEntities = null,
        public ?int $voiceDuration = null,
        public ?InlineKeyboardMarkupInterface $replyMarkup = null,
        public ?InputMessageContentInterface $inputMessageContent = null,
    ) {
    }
}

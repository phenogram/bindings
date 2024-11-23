<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Represents a link to an MP3 audio file stored on the Telegram servers. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 */
class InlineQueryResultCachedAudio extends InlineQueryResult implements Interfaces\InlineQueryResultCachedAudioInterface
{
    /**
     * @param string                             $id                  Unique identifier for this result, 1-64 bytes
     * @param string                             $audioFileId         A valid file identifier for the audio file
     * @param string                             $type                Type of the result, must be audio
     * @param string|null                        $caption             Optional. Caption, 0-1024 characters after entities parsing
     * @param string|null                        $parseMode           Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
     * @param array<MessageEntityInterface>|null $captionEntities     Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param InlineKeyboardMarkupInterface|null $replyMarkup         Optional. Inline keyboard attached to the message
     * @param InputMessageContentInterface|null  $inputMessageContent Optional. Content of the message to be sent instead of the audio
     */
    public function __construct(
        public string $id,
        public string $audioFileId,
        public string $type = 'audio',
        public ?string $caption = null,
        public ?string $parseMode = null,
        public ?array $captionEntities = null,
        public ?InlineKeyboardMarkupInterface $replyMarkup = null,
        public ?InputMessageContentInterface $inputMessageContent = null,
    ) {
    }
}

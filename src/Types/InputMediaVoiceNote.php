<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Represents a voice message file to be sent.
 */
class InputMediaVoiceNote implements Interfaces\InputMediaVoiceNoteInterface
{
    /**
     * @param string                             $media           File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
     * @param string                             $type            Type of the media, must be voice_note
     * @param string|null                        $caption         Optional. Caption of the voice message to be sent, 0-1024 characters after entities parsing
     * @param string|null                        $parseMode       Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
     * @param array<MessageEntityInterface>|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param int|null                           $duration        Optional. Duration of the voice message in seconds
     */
    public function __construct(
        public string $media,
        public string $type = 'voice_note',
        public ?string $caption = null,
        public ?string $parseMode = null,
        public ?array $captionEntities = null,
        public ?int $duration = null,
    ) {
    }
}

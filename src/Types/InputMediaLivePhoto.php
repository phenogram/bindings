<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Represents a live photo to be sent.
 */
class InputMediaLivePhoto extends InputMedia implements Interfaces\InputMediaLivePhotoInterface
{
    /**
     * @param string                             $media                 Video of the live photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files ». Sending live photos by a URL is currently unsupported.
     * @param string                             $photo                 The static photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files ». Sending live photos by a URL is currently unsupported.
     * @param string                             $type                  Type of the result, must be live_photo
     * @param string|null                        $caption               Optional. Caption of the live photo to be sent, 0-1024 characters after entities parsing
     * @param string|null                        $parseMode             Optional. Mode for parsing entities in the live photo caption. See formatting options for more details.
     * @param array<MessageEntityInterface>|null $captionEntities       Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null                          $showCaptionAboveMedia Optional. Pass True, if the caption must be shown above the message media
     * @param bool|null                          $hasSpoiler            Optional. Pass True if the live photo needs to be covered with a spoiler animation
     */
    public function __construct(
        public string $media,
        public string $photo,
        public string $type = 'live_photo',
        public ?string $caption = null,
        public ?string $parseMode = null,
        public ?array $captionEntities = null,
        public ?bool $showCaptionAboveMedia = null,
        public ?bool $hasSpoiler = null,
    ) {
    }
}

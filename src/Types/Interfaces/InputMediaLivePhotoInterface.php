<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a live photo to be sent.
 */
interface InputMediaLivePhotoInterface extends TypeInterface
{
    /** @var string $type Type of the media, must be live_photo */
    public string $type { set; get; }

    /** @var string $media Video of the live photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files ». Sending live photos by a URL is currently unsupported. */
    public string $media { set; get; }

    /** @var string $photo The static photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended) or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files ». Sending live photos by a URL is currently unsupported. */
    public string $photo { set; get; }

    /** @var string|null $caption Optional. Caption of the live photo to be sent, 0-1024 characters after entities parsing */
    public ?string $caption { set; get; }

    /** @var string|null $parseMode Optional. Mode for parsing entities in the live photo caption. See formatting options for more details. */
    public ?string $parseMode { set; get; }

    /** @var array<MessageEntityInterface>|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode */
    public ?array $captionEntities { set; get; }

    /** @var bool|null $showCaptionAboveMedia Optional. Pass True if the caption must be shown above the message media */
    public ?bool $showCaptionAboveMedia { set; get; }

    /** @var bool|null $hasSpoiler Optional. Pass True if the live photo needs to be covered with a spoiler animation */
    public ?bool $hasSpoiler { set; get; }
}

<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents an animation file (GIF or H.264/MPEG-4 AVC video without sound) to be sent.
 */
interface InputMediaAnimationInterface extends TypeInterface
{
    /** @var string $type Type of the result, must be animation */
    public string $type { set; }

    /** @var string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files » */
    public string $media { set; }

    /** @var string|null $thumbnail Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files » */
    public ?string $thumbnail { set; }

    /** @var string|null $caption Optional. Caption of the animation to be sent, 0-1024 characters after entities parsing */
    public ?string $caption { set; }

    /** @var string|null $parseMode Optional. Mode for parsing entities in the animation caption. See formatting options for more details. */
    public ?string $parseMode { set; }

    /** @var array<MessageEntityInterface>|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode */
    public ?array $captionEntities { set; }

    /** @var bool|null $showCaptionAboveMedia Optional. Pass True, if the caption must be shown above the message media */
    public ?bool $showCaptionAboveMedia { set; }

    /** @var int|null $width Optional. Animation width */
    public ?int $width { set; }

    /** @var int|null $height Optional. Animation height */
    public ?int $height { set; }

    /** @var int|null $duration Optional. Animation duration in seconds */
    public ?int $duration { set; }

    /** @var bool|null $hasSpoiler Optional. Pass True if the animation needs to be covered with a spoiler animation */
    public ?bool $hasSpoiler { set; }
}

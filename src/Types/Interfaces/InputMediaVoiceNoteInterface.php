<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a voice message file to be sent.
 */
interface InputMediaVoiceNoteInterface extends TypeInterface
{
    /** @var string $type Type of the media, must be voice_note */
    public string $type { set; get; }

    /** @var string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files » */
    public string $media { set; get; }

    /** @var string|null $caption Optional. Caption of the voice message to be sent, 0-1024 characters after entities parsing */
    public ?string $caption { set; get; }

    /** @var string|null $parseMode Optional. Mode for parsing entities in the voice message caption. See formatting options for more details. */
    public ?string $parseMode { set; get; }

    /** @var array<MessageEntityInterface>|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode */
    public ?array $captionEntities { set; get; }

    /** @var int|null $duration Optional. Duration of the voice message in seconds */
    public ?int $duration { set; get; }
}

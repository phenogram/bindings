<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a sticker file to be sent.
 */
interface InputMediaStickerInterface extends TypeInterface
{
    /** @var string $type Type of the media, must be sticker */
    public string $type { set; get; }

    /** @var string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a .WEBP sticker from the Internet, or pass “attach://<file_attach_name>” to upload a new .WEBP, .TGS, or .WEBM sticker using multipart/form-data under <file_attach_name> name. More information on Sending Files » */
    public string $media { set; get; }

    /** @var string|null $emoji Optional. Emoji associated with the sticker; only for just uploaded stickers */
    public ?string $emoji { set; get; }
}

<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes a sticker to be added to a sticker set.
 */
interface InputStickerInterface extends TypeInterface
{
    /** @var InputFileInterface|string $sticker The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, upload a new one using multipart/form-data, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL. More information on Sending Files » */
    public InputFileInterface|string $sticker { set; }

    /** @var string $format Format of the added sticker, must be one of “static” for a .WEBP or .PNG image, “animated” for a .TGS animation, “video” for a .WEBM video */
    public string $format { set; }

    /** @var array<string> $emojiList List of 1-20 emoji associated with the sticker */
    public array $emojiList { set; }

    /** @var MaskPositionInterface|null $maskPosition Optional. Position where the mask should be placed on faces. For “mask” stickers only. */
    public ?MaskPositionInterface $maskPosition { set; }

    /** @var array<string>|null $keywords Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only. */
    public ?array $keywords { set; }
}

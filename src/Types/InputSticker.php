<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MaskPositionInterface;

/**
 * This object describes a sticker to be added to a sticker set.
 */
class InputSticker implements Interfaces\InputStickerInterface
{
    /**
     * @param string                     $sticker      The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new file using multipart/form-data under <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL. More information on Sending Files »
     * @param string                     $format       Format of the added sticker, must be one of “static” for a .WEBP or .PNG image, “animated” for a .TGS animation, “video” for a .WEBM video
     * @param array<string>              $emojiList    List of 1-20 emoji associated with the sticker
     * @param MaskPositionInterface|null $maskPosition Optional. Position where the mask should be placed on faces. For “mask” stickers only.
     * @param array<string>|null         $keywords     Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
     */
    public function __construct(
        public string $sticker,
        public string $format,
        public array $emojiList,
        public ?MaskPositionInterface $maskPosition = null,
        public ?array $keywords = null,
    ) {
    }
}

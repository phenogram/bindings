<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputSticker;
use Phenogram\Bindings\Types\Interfaces\InputStickerInterface;
use Phenogram\Bindings\Types\Interfaces\MaskPositionInterface;

class InputStickerFactory extends AbstractFactory
{
    /**
     * Creates a new InputSticker instance with default fake data.
     *
     * @param string|null                $sticker      Optional. The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or pass “attach://” to upload a new file using multipart/form-data under  name. Animated and video stickers can't be uploaded via HTTP URL. More information on Sending Files »
     * @param string|null                $format       Optional. Format of the added sticker, must be one of “static” for a .WEBP or .PNG image, “animated” for a .TGS animation, “video” for a .WEBM video
     * @param array|null                 $emojiList    Optional. List of 1-20 emoji associated with the sticker
     * @param MaskPositionInterface|null $maskPosition Optional. Optional. Position where the mask should be placed on faces. For “mask” stickers only.
     * @param array|null                 $keywords     Optional. Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
     */
    public static function make(
        ?string $sticker = null,
        ?string $format = null,
        ?array $emojiList = null,
        ?MaskPositionInterface $maskPosition = null,
        ?array $keywords = null,
    ): InputStickerInterface {
        return self::factory()->makeInputSticker(
            sticker: $sticker ?? self::fake()->text(50),
            format: $format ?? self::fake()->text(50),
            emojiList: $emojiList ?? self::fake()->randomElements(['👍', '❤️', '😂', '🚀'], self::fake()->numberBetween(1, 3)),
            maskPosition: $maskPosition,
            keywords: $keywords,
        );
    }
}

<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputMediaSticker;
use Phenogram\Bindings\Types\Interfaces\InputMediaStickerInterface;

class InputMediaStickerFactory extends AbstractFactory
{
    /**
     * Creates a new InputMediaSticker instance with default fake data.
     *
     * @param string|null $type  Optional. Type of the result, must be sticker
     * @param string|null $media Optional. File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a .WEBP sticker from the Internet, or pass “attach://” to upload a new .WEBP, .TGS, or .WEBM sticker using multipart/form-data under  name. More information on Sending Files »
     * @param string|null $emoji Optional. Optional. Emoji associated with the sticker; only for just uploaded stickers
     */
    public static function make(
        ?string $type = null,
        ?string $media = null,
        ?string $emoji = null,
    ): InputMediaStickerInterface {
        return self::factory()->makeInputMediaSticker(
            type: $type ?? self::fake()->word(),
            media: $media ?? self::fake()->text(50),
            emoji: $emoji,
        );
    }
}

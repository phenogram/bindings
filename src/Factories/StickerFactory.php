<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\FileFactory as File;
use Phenogram\Bindings\Types\Interfaces\FileInterface;
use Phenogram\Bindings\Types\Interfaces\MaskPositionInterface;
use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;
use Phenogram\Bindings\Types\Sticker;

class StickerFactory extends AbstractFactory
{
    /**
     * Creates a new Sticker instance with default fake data.
     *
     * @param string|null                $fileId           Optional. Identifier for this file, which can be used to download or reuse the file
     * @param string|null                $fileUniqueId     Optional. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param string|null                $type             Optional. Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video.
     * @param int|null                   $width            Optional. Sticker width
     * @param int|null                   $height           Optional. Sticker height
     * @param bool|null                  $isAnimated       Optional. True, if the sticker is animated
     * @param bool|null                  $isVideo          Optional. True, if the sticker is a video sticker
     * @param PhotoSizeInterface|null    $thumbnail        Optional. Optional. Sticker thumbnail in the .WEBP or .JPG format
     * @param string|null                $emoji            Optional. Optional. Emoji associated with the sticker
     * @param string|null                $setName          Optional. Optional. Name of the sticker set to which the sticker belongs
     * @param FileInterface|null         $premiumAnimation Optional. Optional. For premium regular stickers, premium animation for the sticker
     * @param MaskPositionInterface|null $maskPosition     Optional. Optional. For mask stickers, the position where the mask should be placed
     * @param string|null                $customEmojiId    Optional. Optional. For custom emoji stickers, unique identifier of the custom emoji
     * @param bool|null                  $needsRepainting  Optional. Optional. True, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
     * @param int|null                   $fileSize         Optional. Optional. File size in bytes
     */
    public static function make(
        ?string $fileId = null,
        ?string $fileUniqueId = null,
        ?string $type = null,
        ?int $width = null,
        ?int $height = null,
        ?bool $isAnimated = null,
        ?bool $isVideo = null,
        ?PhotoSizeInterface $thumbnail = null,
        ?string $emoji = null,
        ?string $setName = null,
        ?FileInterface $premiumAnimation = null,
        ?MaskPositionInterface $maskPosition = null,
        ?string $customEmojiId = null,
        ?bool $needsRepainting = null,
        ?int $fileSize = null,
    ): StickerInterface {
        return self::factory()->makeSticker(
            fileId: $fileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            fileUniqueId: $fileUniqueId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            type: $type ?? self::fake()->word(),
            width: $width ?? self::fake()->numberBetween(10, 1000),
            height: $height ?? self::fake()->numberBetween(10, 1000),
            isAnimated: $isAnimated ?? self::fake()->boolean(),
            isVideo: $isVideo ?? self::fake()->boolean(),
            thumbnail: $thumbnail,
            emoji: $emoji,
            setName: $setName,
            premiumAnimation: $premiumAnimation,
            maskPosition: $maskPosition,
            customEmojiId: $customEmojiId,
            needsRepainting: $needsRepainting,
            fileSize: $fileSize,
        );
    }
}

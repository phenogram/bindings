<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\StickerFactory as Sticker;
use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;
use Phenogram\Bindings\Types\Interfaces\StickerSetInterface;
use Phenogram\Bindings\Types\StickerSet;

class StickerSetFactory extends AbstractFactory
{
    /**
     * Creates a new StickerSet instance with default fake data.
     *
     * @param string|null             $name        Optional. Sticker set name
     * @param string|null             $title       Optional. Sticker set title
     * @param string|null             $stickerType Optional. Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
     * @param array|null              $stickers    Optional. List of all set stickers
     * @param PhotoSizeInterface|null $thumbnail   Optional. Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
     */
    public static function make(
        ?string $name = null,
        ?string $title = null,
        ?string $stickerType = null,
        ?array $stickers = null,
        ?PhotoSizeInterface $thumbnail = null,
    ): StickerSetInterface {
        return self::factory()->makeStickerSet(
            name: $name ?? self::fake()->text(50),
            title: $title ?? self::fake()->sentence(3),
            stickerType: $stickerType ?? self::fake()->text(50),
            stickers: $stickers ?? array_map(fn () => Sticker::make(), range(0, self::fake()->numberBetween(0, 2))),
            thumbnail: $thumbnail,
        );
    }
}

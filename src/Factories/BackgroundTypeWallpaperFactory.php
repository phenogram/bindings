<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\DocumentFactory as Document;
use Phenogram\Bindings\Types\BackgroundTypeWallpaper;
use Phenogram\Bindings\Types\Interfaces\BackgroundTypeWallpaperInterface;
use Phenogram\Bindings\Types\Interfaces\DocumentInterface;

class BackgroundTypeWallpaperFactory extends AbstractFactory
{
    /**
     * Creates a new BackgroundTypeWallpaper instance with default fake data.
     *
     * @param string|null            $type             Optional. Type of the background, always “wallpaper”
     * @param DocumentInterface|null $document         Optional. Document with the wallpaper
     * @param int|null               $darkThemeDimming Optional. Dimming of the background in dark themes, as a percentage; 0-100
     * @param bool|null              $isBlurred        Optional. Optional. True, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12
     * @param bool|null              $isMoving         Optional. Optional. True, if the background moves slightly when the device is tilted
     */
    public static function make(
        ?string $type = null,
        ?DocumentInterface $document = null,
        ?int $darkThemeDimming = null,
        ?bool $isBlurred = null,
        ?bool $isMoving = null,
    ): BackgroundTypeWallpaperInterface {
        return self::factory()->makeBackgroundTypeWallpaper(
            type: $type ?? self::fake()->word(),
            document: $document ?? Document::make(),
            darkThemeDimming: $darkThemeDimming ?? self::fake()->randomNumber(),
            isBlurred: $isBlurred,
            isMoving: $isMoving,
        );
    }
}

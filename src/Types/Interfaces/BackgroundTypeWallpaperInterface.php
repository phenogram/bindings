<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The background is a wallpaper in the JPEG format.
 */
interface BackgroundTypeWallpaperInterface extends TypeInterface
{
    /** @var string $type Type of the background, always “wallpaper” */
    public string $type { set; get; }

    /** @var DocumentInterface $document Document with the wallpaper */
    public DocumentInterface $document { set; get; }

    /** @var int $darkThemeDimming Dimming of the background in dark themes, as a percentage; 0-100 */
    public int $darkThemeDimming { set; get; }

    /** @var bool|null $isBlurred Optional. True, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12 */
    public ?bool $isBlurred { set; get; }

    /** @var bool|null $isMoving Optional. True, if the background moves slightly when the device is tilted */
    public ?bool $isMoving { set; get; }
}

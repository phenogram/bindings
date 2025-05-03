<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The background is automatically filled based on the selected colors.
 */
interface BackgroundTypeFillInterface extends TypeInterface
{
    /** @var string $type Type of the background, always “fill” */
    public string $type { set; get; }

    /** @var BackgroundFillInterface $fill The background fill */
    public BackgroundFillInterface $fill { set; get; }

    /** @var int $darkThemeDimming Dimming of the background in dark themes, as a percentage; 0-100 */
    public int $darkThemeDimming { set; get; }
}

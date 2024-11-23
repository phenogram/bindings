<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\BackgroundFillInterface;

/**
 * The background is automatically filled based on the selected colors.
 */
class BackgroundTypeFill extends BackgroundType implements Interfaces\BackgroundTypeFillInterface
{
    /**
     * @param string                  $type             Type of the background, always “fill”
     * @param BackgroundFillInterface $fill             The background fill
     * @param int                     $darkThemeDimming Dimming of the background in dark themes, as a percentage; 0-100
     */
    public function __construct(
        public string $type,
        public BackgroundFillInterface $fill,
        public int $darkThemeDimming,
    ) {
    }
}

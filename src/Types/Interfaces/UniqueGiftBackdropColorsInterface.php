<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes the colors of the backdrop of a unique gift.
 */
interface UniqueGiftBackdropColorsInterface extends TypeInterface
{
    /** @var int $centerColor The color in the center of the backdrop in RGB format */
    public int $centerColor { set; }

    /** @var int $edgeColor The color on the edges of the backdrop in RGB format */
    public int $edgeColor { set; }

    /** @var int $symbolColor The color to be applied to the symbol in RGB format */
    public int $symbolColor { set; }

    /** @var int $textColor The color for the text on the backdrop in RGB format */
    public int $textColor { set; }
}

<?php

namespace Phenogram\Bindings\Types;

/**
 * This object describes the colors of the backdrop of a unique gift.
 */
class UniqueGiftBackdropColors implements Interfaces\UniqueGiftBackdropColorsInterface
{
    /**
     * @param int $centerColor The color in the center of the backdrop in RGB format
     * @param int $edgeColor   The color on the edges of the backdrop in RGB format
     * @param int $symbolColor The color to be applied to the symbol in RGB format
     * @param int $textColor   The color for the text on the backdrop in RGB format
     */
    public function __construct(
        public int $centerColor,
        public int $edgeColor,
        public int $symbolColor,
        public int $textColor,
    ) {
    }
}

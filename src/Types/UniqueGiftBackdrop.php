<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UniqueGiftBackdropColorsInterface;

/**
 * This object describes the backdrop of a unique gift.
 */
class UniqueGiftBackdrop implements Interfaces\UniqueGiftBackdropInterface
{
    /**
     * @param string                            $name           Name of the backdrop
     * @param UniqueGiftBackdropColorsInterface $colors         Colors of the backdrop
     * @param int                               $rarityPerMille The number of unique gifts that receive this backdrop for every 1000 gifts upgraded
     */
    public function __construct(
        public string $name,
        public UniqueGiftBackdropColorsInterface $colors,
        public int $rarityPerMille,
    ) {
    }
}

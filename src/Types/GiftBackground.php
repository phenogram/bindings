<?php

namespace Phenogram\Bindings\Types;

/**
 * This object describes the background of a gift.
 */
class GiftBackground implements Interfaces\GiftBackgroundInterface
{
    /**
     * @param int $centerColor Center color of the background in RGB format
     * @param int $edgeColor   Edge color of the background in RGB format
     * @param int $textColor   Text color of the background in RGB format
     */
    public function __construct(
        public int $centerColor,
        public int $edgeColor,
        public int $textColor,
    ) {
    }
}

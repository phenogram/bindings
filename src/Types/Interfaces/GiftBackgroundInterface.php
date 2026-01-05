<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes the background of a gift.
 */
interface GiftBackgroundInterface extends TypeInterface
{
    /** @var int $centerColor Center color of the background in RGB format */
    public int $centerColor { set; get; }

    /** @var int $edgeColor Edge color of the background in RGB format */
    public int $edgeColor { set; get; }

    /** @var int $textColor Text color of the background in RGB format */
    public int $textColor { set; get; }
}

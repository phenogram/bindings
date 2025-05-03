<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes the backdrop of a unique gift.
 */
interface UniqueGiftBackdropInterface extends TypeInterface
{
    /** @var string $name Name of the backdrop */
    public string $name { set; get; }

    /** @var UniqueGiftBackdropColorsInterface $colors Colors of the backdrop */
    public UniqueGiftBackdropColorsInterface $colors { set; get; }

    /** @var int $rarityPerMille The number of unique gifts that receive this backdrop for every 1000 gifts upgraded */
    public int $rarityPerMille { set; get; }
}

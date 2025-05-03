<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represent a list of gifts.
 */
interface GiftsInterface extends TypeInterface
{
    /** @var array<GiftInterface> $gifts The list of gifts */
    public array $gifts { set; get; }
}

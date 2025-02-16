<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The background is a freeform gradient that rotates after every message in the chat.
 */
interface BackgroundFillFreeformGradientInterface extends TypeInterface
{
    /** @var string $type Type of the background fill, always “freeform_gradient” */
    public string $type { set; }

    /** @var array<int> $colors A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format */
    public array $colors { set; }
}

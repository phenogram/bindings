<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes a backdrop, which can be used as the background of a theme of the screen for sharing a link to a user or a chat.
 */
interface ChatShareThemeBackdropInterface extends TypeInterface
{
    /** @var int $id Unique identifier of the backdrop */
    public int $id { set; get; }

    /** @var string $name Name of the backdrop */
    public string $name { set; get; }

    /** @var UniqueGiftBackdropColorsInterface $colors Colors of the backdrop */
    public UniqueGiftBackdropColorsInterface $colors { set; get; }
}

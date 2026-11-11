<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UniqueGiftBackdropColorsInterface;

/**
 * This object describes a backdrop, which can be used as the background of a theme of the screen for sharing a link to a user or a chat.
 */
class ChatShareThemeBackdrop implements Interfaces\ChatShareThemeBackdropInterface
{
    /**
     * @param int                               $id     Unique identifier of the backdrop
     * @param string                            $name   Name of the backdrop
     * @param UniqueGiftBackdropColorsInterface $colors Colors of the backdrop
     */
    public function __construct(
        public int $id,
        public string $name,
        public UniqueGiftBackdropColorsInterface $colors,
    ) {
    }
}

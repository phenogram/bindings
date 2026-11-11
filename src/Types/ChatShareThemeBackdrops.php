<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatShareThemeBackdropInterface;

/**
 * This object contains a list of backdrops, which can be used as the background of a theme of the screen for sharing a link to a user or a chat.
 */
class ChatShareThemeBackdrops implements Interfaces\ChatShareThemeBackdropsInterface
{
    /**
     * @param array<ChatShareThemeBackdropInterface> $backdrops The list of backdrops
     */
    public function __construct(
        public array $backdrops,
    ) {
    }
}

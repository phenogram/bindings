<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains a list of backdrops, which can be used as the background of a theme of the screen for sharing a link to a user or a chat.
 */
interface ChatShareThemeBackdropsInterface extends TypeInterface
{
    /** @var array<ChatShareThemeBackdropInterface> $backdrops The list of backdrops */
    public array $backdrops { set; get; }
}

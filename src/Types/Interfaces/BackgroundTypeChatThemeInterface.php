<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The background is taken directly from a built-in chat theme.
 */
interface BackgroundTypeChatThemeInterface extends TypeInterface
{
    /** @var string $type Type of the background, always “chat_theme” */
    public string $type { set; }

    /** @var string $themeName Name of the chat theme, which is usually an emoji */
    public string $themeName { set; }
}

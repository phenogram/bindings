<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BackgroundTypeChatTheme;
use Phenogram\Bindings\Types\Interfaces\BackgroundTypeChatThemeInterface;

class BackgroundTypeChatThemeFactory extends AbstractFactory
{
    /**
     * Creates a new BackgroundTypeChatTheme instance with default fake data.
     *
     * @param string|null $type      Optional. Type of the background, always “chat_theme”
     * @param string|null $themeName Optional. Name of the chat theme, which is usually an emoji
     */
    public static function make(?string $type = null, ?string $themeName = null): BackgroundTypeChatThemeInterface
    {
        return self::factory()->makeBackgroundTypeChatTheme(
            type: $type ?? self::fake()->word(),
            themeName: $themeName ?? self::fake()->text(50),
        );
    }
}

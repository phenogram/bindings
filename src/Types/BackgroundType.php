<?php

namespace Phenogram\Bindings\Types;

/**
 * This object describes the type of a background. Currently, it can be one of.
 *
 * @see BackgroundTypeFill
 * @see BackgroundTypeWallpaper
 * @see BackgroundTypePattern
 * @see BackgroundTypeChatTheme
 */
abstract class BackgroundType implements Interfaces\BackgroundTypeInterface
{
    public function __construct()
    {
    }
}

<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\ChatBackground;
use Phenogram\Bindings\Types\Interfaces\ChatBackgroundInterface;

class ChatBackgroundFactory extends AbstractFactory
{
    /**
     * Creates a new ChatBackground instance with default fake data.
     *
     * @param \Phenogram\Bindings\Types\Interfaces\BackgroundTypeInterface|null $type Optional. Type of the background
     */
    public static function make(
        ?\Phenogram\Bindings\Types\Interfaces\BackgroundTypeInterface $type = null,
    ): ChatBackgroundInterface {
        return self::factory()->makeChatBackground(
            type: $type ?? '[Abstract type: BackgroundType]',
        );
    }
}

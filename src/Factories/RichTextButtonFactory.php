<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\RichMessageButtonFactory as RichMessageButton;
use Phenogram\Bindings\Types\Interfaces\RichMessageButtonInterface;
use Phenogram\Bindings\Types\Interfaces\RichTextButtonInterface;
use Phenogram\Bindings\Types\RichTextButton;

class RichTextButtonFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextButton instance with default fake data.
     *
     * @param string|null                     $type   Optional. Type of the rich text, always “button”
     * @param RichMessageButtonInterface|null $button Optional. The button
     */
    public static function make(
        ?string $type = null,
        ?RichMessageButtonInterface $button = null,
    ): RichTextButtonInterface {
        return self::factory()->makeRichTextButton(
            type: $type ?? 'button',
            button: $button ?? RichMessageButton::make(),
        );
    }
}

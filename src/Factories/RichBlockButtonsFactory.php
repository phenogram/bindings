<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\RichMessageButtonFactory as RichMessageButton;
use Phenogram\Bindings\Types\Interfaces\RichBlockButtonsInterface;
use Phenogram\Bindings\Types\RichBlockButtons;

class RichBlockButtonsFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockButtons instance with default fake data.
     *
     * @param string|null $type    Optional. Type of the block, always “buttons”
     * @param array|null  $buttons Optional. The buttons
     * @param string|null $align   Optional. Optional. Horizontal alignment of the buttons. Currently, must be one of “left”, “center”, or “right”.
     */
    public static function make(
        ?string $type = null,
        ?array $buttons = null,
        ?string $align = null,
    ): RichBlockButtonsInterface {
        return self::factory()->makeRichBlockButtons(
            type: $type ?? 'buttons',
            buttons: $buttons ?? array_map(fn () => RichMessageButton::make(), range(0, self::fake()->numberBetween(0, 2))),
            align: $align,
        );
    }
}

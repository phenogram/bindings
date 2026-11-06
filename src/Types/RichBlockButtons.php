<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichMessageButtonInterface;

/**
 * A block containing a list of buttons that are shown in one row, corresponding to the custom HTML tag <tg-button-row>.
 */
class RichBlockButtons extends RichBlock implements Interfaces\RichBlockButtonsInterface
{
    /**
     * @param string                            $type    Type of the block, always “buttons”
     * @param array<RichMessageButtonInterface> $buttons The buttons
     * @param string|null                       $align   Optional. Horizontal alignment of the buttons. Currently, must be one of “left”, “center”, or “right”.
     */
    public function __construct(
        public string $type,
        public array $buttons,
        public ?string $align = null,
    ) {
    }
}

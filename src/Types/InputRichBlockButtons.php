<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichMessageButtonInterface;

/**
 * A block containing a list of buttons that are shown in one row, corresponding to the custom HTML tag <tg-button-row>.
 */
class InputRichBlockButtons extends InputRichBlock implements Interfaces\InputRichBlockButtonsInterface
{
    /**
     * @param string                            $type    Type of the block, always “buttons”
     * @param array<RichMessageButtonInterface> $buttons List of 1-8 buttons to send
     * @param string|null                       $align   Optional. Horizontal alignment of the buttons. Currently, must be one of “left”, “center”, or “right”.
     */
    public function __construct(
        public string $type,
        public array $buttons,
        public ?string $align = null,
    ) {
    }
}

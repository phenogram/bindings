<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block containing a list of buttons that are shown in one row, corresponding to the custom HTML tag <tg-button-row>.
 */
interface InputRichBlockButtonsInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “buttons” */
    public string $type { set; get; }

    /** @var array<RichMessageButtonInterface> $buttons List of 1-8 buttons to send */
    public array $buttons { set; get; }

    /** @var string|null $align Optional. Horizontal alignment of the buttons. Currently, must be one of “left”, “center”, or “right”. */
    public ?string $align { set; get; }
}

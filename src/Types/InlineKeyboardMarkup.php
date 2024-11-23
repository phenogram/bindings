<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InlineKeyboardButtonInterface;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 */
class InlineKeyboardMarkup implements Interfaces\InlineKeyboardMarkupInterface
{
    /**
     * @param array<array<InlineKeyboardButtonInterface>> $inlineKeyboard Array of button rows, each represented by an Array of InlineKeyboardButton objects
     */
    public function __construct(
        public array $inlineKeyboard,
    ) {
    }
}

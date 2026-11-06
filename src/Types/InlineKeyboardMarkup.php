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
     * @param bool|null                                   $forceReply     Optional. Pass True if the reply interface must be shown to the user, as if they had manually selected the bot's message and tapped 'Reply'. The value of the field can't be changed when the inline keyboard is edited.
     */
    public function __construct(
        public array $inlineKeyboard,
        public ?bool $forceReply = null,
    ) {
    }
}

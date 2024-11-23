<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 */
interface InlineKeyboardMarkupInterface extends TypeInterface
{
	/** @var array<array<InlineKeyboardButtonInterface>> $inlineKeyboard Array of button rows, each represented by an Array of InlineKeyboardButton objects */
	public array $inlineKeyboard { set; get; }
}

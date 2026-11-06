<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\InlineKeyboardButtonFactory as InlineKeyboardButton;
use Phenogram\Bindings\Types\InlineKeyboardMarkup;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;

class InlineKeyboardMarkupFactory extends AbstractFactory
{
    /**
     * Creates a new InlineKeyboardMarkup instance with default fake data.
     *
     * @param array|null $inlineKeyboard Optional. Array of button rows, each represented by an Array of InlineKeyboardButton objects
     * @param bool|null  $forceReply     Optional. Optional. Pass True if the reply interface must be shown to the user, as if they had manually selected the bot's message and tapped 'Reply'. The value of the field can't be changed when the inline keyboard is edited.
     */
    public static function make(?array $inlineKeyboard = null, ?bool $forceReply = null): InlineKeyboardMarkupInterface
    {
        return self::factory()->makeInlineKeyboardMarkup(
            inlineKeyboard: $inlineKeyboard ?? array_map(fn () => array_map(fn () => InlineKeyboardButton::make(), range(0, self::fake()->numberBetween(0, 1))), range(0, self::fake()->numberBetween(0, 2))),
            forceReply: $forceReply,
        );
    }
}

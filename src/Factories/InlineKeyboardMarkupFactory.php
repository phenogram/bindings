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
     */
    public static function make(?array $inlineKeyboard = null): InlineKeyboardMarkupInterface
    {
        return self::factory()->makeInlineKeyboardMarkup(
            inlineKeyboard: $inlineKeyboard ?? array_map(fn () => array_map(fn () => InlineKeyboardButton::make(), range(0, self::fake()->numberBetween(0, 1))), range(0, self::fake()->numberBetween(0, 2))),
        );
    }
}

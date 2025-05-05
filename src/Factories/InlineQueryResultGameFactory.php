<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultGame;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultGameInterface;

class InlineQueryResultGameFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultGame instance with default fake data.
     *
     * @param string|null                        $type          Optional. Type of the result, must be game
     * @param string|null                        $id            Optional. Unique identifier for this result, 1-64 bytes
     * @param string|null                        $gameShortName Optional. Short name of the game
     * @param InlineKeyboardMarkupInterface|null $replyMarkup   Optional. Optional. Inline keyboard attached to the message
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?string $gameShortName = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
    ): InlineQueryResultGameInterface {
        return self::factory()->makeInlineQueryResultGame(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            gameShortName: $gameShortName ?? self::fake()->text(50),
            replyMarkup: $replyMarkup,
        );
    }
}

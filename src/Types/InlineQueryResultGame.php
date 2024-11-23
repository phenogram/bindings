<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;

/**
 * Represents a Game.
 */
class InlineQueryResultGame extends InlineQueryResult implements Interfaces\InlineQueryResultGameInterface
{
    /**
     * @param string                             $id            Unique identifier for this result, 1-64 bytes
     * @param string                             $gameShortName Short name of the game
     * @param string                             $type          Type of the result, must be game
     * @param InlineKeyboardMarkupInterface|null $replyMarkup   Optional. Inline keyboard attached to the message
     */
    public function __construct(
        public string $id,
        public string $gameShortName,
        public string $type = 'game',
        public ?InlineKeyboardMarkupInterface $replyMarkup = null,
    ) {
    }
}

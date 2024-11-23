<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a Game.
 */
interface InlineQueryResultGameInterface extends TypeInterface
{
	/** @var string $type Type of the result, must be game */
	public string $type { set; get; }

	/** @var string $id Unique identifier for this result, 1-64 bytes */
	public string $id { set; get; }

	/** @var string $gameShortName Short name of the game */
	public string $gameShortName { set; get; }

	/** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message */
	public ?InlineKeyboardMarkupInterface $replyMarkup { set; get; }
}

<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 */
interface GameInterface extends TypeInterface
{
	/** @var string $title Title of the game */
	public string $title { set; get; }

	/** @var string $description Description of the game */
	public string $description { set; get; }

	/** @var array<PhotoSizeInterface> $photo Photo that will be displayed in the game message in chats. */
	public array $photo { set; get; }

	/** @var string|null $text Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters. */
	public ?string $text { set; get; }

	/** @var array<MessageEntityInterface>|null $textEntities Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc. */
	public ?array $textEntities { set; get; }

	/** @var AnimationInterface|null $animation Optional. Animation that will be displayed in the game message in chats. Upload via BotFather */
	public ?AnimationInterface $animation { set; get; }
}

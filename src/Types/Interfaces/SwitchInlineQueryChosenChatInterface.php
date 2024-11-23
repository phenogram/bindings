<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents an inline button that switches the current user to inline mode in a chosen chat, with an optional default inline query.
 */
interface SwitchInlineQueryChosenChatInterface extends TypeInterface
{
	/** @var string|null $query Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted */
	public ?string $query { set; get; }

	/** @var bool|null $allowUserChats Optional. True, if private chats with users can be chosen */
	public ?bool $allowUserChats { set; get; }

	/** @var bool|null $allowBotChats Optional. True, if private chats with bots can be chosen */
	public ?bool $allowBotChats { set; get; }

	/** @var bool|null $allowGroupChats Optional. True, if group and supergroup chats can be chosen */
	public ?bool $allowGroupChats { set; get; }

	/** @var bool|null $allowChannelChats Optional. True, if channel chats can be chosen */
	public ?bool $allowChannelChats { set; get; }
}
